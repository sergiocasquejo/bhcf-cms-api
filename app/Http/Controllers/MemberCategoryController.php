<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MemberCategoryStoreRequest;
use App\Http\Requests\MemberCategoryUpdateRequest;
/**
 * @group Member Category management
 *
 * APIs for managing category member
 */
class MemberCategoryController extends Controller
{
     /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('admin');
        // $this->middleware('cellleader')->only(['index', 'show']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @response {
     * "ok":true,
     * "data":[
     *      {
     *      "id":1,
     *      "name":"Category 1",
     *      "descriptions":"",
     *      "created_by":1,
     *      "created_at":"2019-02-06 09:58:46",
     *      "updated_at":"2019-02-06 09:58:46",
     *      "deleted_at":null
     *      }
     *  ]
     * }
     */
    public function index(Request $request)
    {
        $offset = (int) $request->input('offset');
        $offset = $offset > 1 ? $offset - 1 : 0;
        $limit = $request->input('limit');
        $keywords = $request->input('keywords');
        $sort = $request->input('sort', 'name');
        $order = $request->input('order', 'desc');
        $query = \App\MemberCategory::select(\DB::raw('*'));
        if ($keywords) {
            $query->where(function($query) use ($keywords){
                $query->where('name', 'like', '%' . $keywords . '%');
            });
        }
        
        if ($sort) {
            $query->orderBy($sort, $order);
        } else {
            $query->orderBy('id', 'DESC');
        }
        
        $totalSize = $query->count();

        if ($request->input('offset') && $request->input('limit')) {
            $query->skip( $offset * $limit )->take($limit);
        }

        $results = $query->get();

        return response()->json(['ok' => true, 'data' =>  $results, 'totalSize' => $totalSize], 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @bodyParam name string required the name of the school status
     * @bodyParam descriptions string optional descriptions of the status
     * 
     * @response {
     *  "ok":true,
     *  "data":{
     *   "name":"SUYNIL",
     *      "descriptions":"",
     *  "updated_at":"2019-02-06 12:49:41",
     *  "created_at":"2019-02-06 12:49:41",
     *  "id":2
     *  }
     * }
     * @response 500{
     *  "data": "Error message ..."
     * }
     * @response 422{
     *  "ok":false,
     *  "data":{
     *      "first_name":["The :attribute field is required."]
     *  }
     * }
     */

    public function store(MemberCategoryStoreRequest $request)
    {  
        try {
            $input = $request->only(['name', 'descriptions']);
            $input['created_by'] = auth()->user()->id;
            $schoolStatus = new \App\MemberCategory($input);
            if ($schoolStatus->save()) {
                return response()->json(['ok' => true, 'data' => $schoolStatus], 201);    
            } else {
                return response()->json(['ok' => false, 'data' => 'Unsuccessfull save.'], 200);
            }
        } catch(\Exception $e) {
            return response()->json(['data' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @response {
     *  "ok":true,
     *  "data":{
     *      "name":"SUYNIL",
     *      "descriptions":"Descriptions here...",
     *      "created_by":1,
     *      "updated_by":1,
     *      "updated_at":"2019-02-06 13:35:26",
     *      "created_at":"2019-02-06 13:35:26","id":9
     *  }
     * }
     * @response 500{
     *  "data": "Error message ..."
     * }
     * @response 404{
     *  "message":"Record not found"
     * }
     */
    public function show($id)
    {
        return response()->json(['data' => \App\MemberCategory::findOrFail($id)]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @bodyParam name string required the name of the school status
     * @bodyParam descriptions string optional descriptions of the status
     * 
     * @response {
     *  "ok":true
     * }
     * @response 500{
     *  "data": "Error message ..."
     * }
     * @response 422{
     *  "ok":false,
     *  "data":{
     *      "first_name":["The :attribute field is required."]
     *  }
     * }
     */
    public function update(MemberCategoryUpdateRequest $request, $id)
    {
        try {
            $input = $request->only(['name', 'descriptions']);
            $input['updated_by'] = auth()->user()->id;

            if ($result = \App\MemberCategory::find($id)->update($input)) {
                return response()->json(['ok' => true], 201);    
            } else {
                return response()->json(['ok' => false, 'data' => 'Unsuccessfull update.'], 200);
            }
        } catch(\Exception $e) {
            return response()->json(['data' => $e->getMessage()], 500);
        }
    }

     /**
     * Remove the specified resource from storage.
     *
     * @response {
     *  "ok": true
     * }
     * @response 500{
     *  "data": "Error message ..."
     * }
     * @response 404{
     *  "message":"Record not found"
     * }
     */
    public function destroy($id)
    {
        return response()->json(['ok' => \App\MemberCategory::findOrFail($id)->delete()]);
    }
}
