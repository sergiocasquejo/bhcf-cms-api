<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SundayCelebrationStatusStoreRequest;
use App\Http\Requests\SundayCelebrationStatusUpdateRequest;
/**
 * @group Sunday Celebration Status management
 *
 * APIs for managing statuses
 */

class SundayCelebrationStatusController extends Controller
{
     /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
        $this->middleware('cellleader');
    }

    /**
     * Display a listing of the resource.
     *
     * @response {
     * "success":true,
     * "data":[
     *      {
     *      "id":1,
     *      "name":"SUYNIL",
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
        $results = \App\SundayCelebrationStatus::all();

        return response()->json(['success' => true, 'data' => $results], 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @bodyParam name string required the name of the school status
     * @bodyParam descriptions string optional descriptions of the status
     * 
     * @response {
     *  "success":true,
     *  "data":{
     *      "name":"1st Timer",
     *      "descriptions":"",
     *      "created_by":1,
     *      "updated_at":"2019-02-11 09:04:41",
     *      "created_at":"2019-02-11 09:04:41",
     *      "id":1
     *    }
     * }
     * @response 500{
     *  "data": "Error message ..."
     * }
     * @response 422{
     *  "success":false,
     *  "data":{
     *      "first_name":["The :attribute field is required."]
     *  }
     * }
     */

    public function store(SundayCelebrationStatusStoreRequest $request)
    {  
        try {
            $input = $request->only(['name', 'descriptions']);
            $input['created_by'] = auth()->user()->id;
            $status = new \App\SundayCelebrationStatus($input);
            if ($status->save()) {
                return response()->json(['success' => true, 'data' => $status], 201);    
            } else {
                return response()->json(['success' => false, 'data' => 'Unsuccessfull save.'], 200);
            }
        } catch(\Exception $e) {
            return response()->json(['data' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @response {
     *  "success":true,
      *  "data":{
     *      "name":"1st Timer",
     *      "descriptions":"",
     *      "created_by":1,
     *      "updated_at":"2019-02-11 09:04:41",
     *      "created_at":"2019-02-11 09:04:41",
     *      "id":1
     *    }
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
        return response()->json(['data' => \App\SundayCelebrationStatus::findOrFail($id)]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @bodyParam name string required the name of the school status
     * @bodyParam descriptions string optional descriptions of the status
     * 
     * @response {
     *  "success":true
     * }
     * @response 500{
     *  "data": "Error message ..."
     * }
     * @response 422{
     *  "success":false,
     *  "data":{
     *      "first_name":["The :attribute field is required."]
     *  }
     * }
     */
    public function update(SundayCelebrationStatusUpdateRequest $request, $id)
    {
        
        try {
            $input = $request->only(['name', 'descriptions']);
            $input['updated_by'] = auth()->user()->id;

            if ($result = \App\SundayCelebrationStatus::find($id)->update($input)) {
                return response()->json(['success' => true], 201);    
            } else {
                return response()->json(['success' => false, 'data' => 'Unsuccessfull update.'], 200);
            }
        } catch(\Exception $e) {
            return response()->json(['data' => $e->getMessage()], 500);
        }
    }

     /**
     * Remove the specified resource from storage.
     *
     * @response {
     *  "success": true
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
        return response()->json(['success' => \App\SundayCelebrationStatus::findOrFail($id)->delete()]);
    }
}
