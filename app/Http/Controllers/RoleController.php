<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RoleStoreRequest;
use App\Http\Requests\RoleUpdateRequest;
/**
 * @group User Role management
 *
 * APIs for managing user roles
 */
class RoleController extends Controller
{
     /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @response {
     * "ok":true,
     * "data":[
     *      {
     *      "id":1,
     *      "name":"Administrator",
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
        $results = \App\Role::all();

        return response()->json(['ok' => true, 'data' => $results], 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @bodyParam name string required the name of the school status
     * @bodyParam descriptions string options descriptions of the status
     * 
     * @response {
     *  "ok":true,
     *  "data":{
     *   "name":"Administrator",
     *  "descriptions":"",
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

    public function store(RoleStoreRequest $request)
    {  
        try {
            $input = $request->only(['name', 'descriptions']);
            $input['created_by'] = auth()->user()->id;
            $classCategory = new \App\Role($input);
            if ($classCategory->save()) {
                return response()->json(['ok' => true, 'data' => $classCategory], 201);    
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
     *      "name":"Administrator",
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
        return response()->json(['data' => \App\Role::findOrFail($id)]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @bodyParam name string required role name
     * @bodyParam descriptions string optional role descriptions
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
    public function update(RoleUpdateRequest $request, $id)
    {
        try {
            $input = $request->only(['name', 'descriptions']);
            $input['updated_by'] = auth()->user()->id;

            if ($result = \App\Role::find($id)->update($input)) {
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
        return response()->json(['ok' => \App\Role::findOrFail($id)->delete()]);
    }
}
