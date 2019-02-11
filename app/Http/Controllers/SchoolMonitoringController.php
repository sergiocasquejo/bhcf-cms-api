<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SchoolMonitoringStoreRequest;
use App\Http\Requests\SchoolMonitoringUpdateRequest;

/**
 * @group School Monitoring management
 *
 * APIs for managing statuses
 */

class SchoolMonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @response {
     * "success":true,
     * "data":[
     *      {
     *      "id":1,
     *      "batch_name":"Kamonggay",
     *      "remarks": "",
     *      "school_year":"2019",
     *      "school_type_id": 1,
     *      "created_by":1,
     *      "updated_by":1,
     *      "created_at":"2019-02-06 09:58:46",
     *      "updated_at":"2019-02-06 09:58:46",
     *      "deleted_at":null
     *      }
     *  ]
     * }
     */
    public function index(Request $request)
    {
        $results = \App\SchoolMonitoring::all();

        return response()->json(['success' => true, 'data' => $results], 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @bodyParam batch_name string required the name of the batch
     * @bodyParam school_year integer requred the year
     * @bodyParam school_type_id integer required the school type (SUYNIL, Life Clas, SOL 1, ...)
     * @bodyParam remarks string optional remarks
     * 
     * 
     * @response {
     *  "success":true,
     *  "data":{
     *      "id":1,
     *      "batch_name":"Kamonggay",
     *      "remarks": "",
     *      "school_year":"2019",
     *      "school_type_id": 1,
     *      "created_by":1,
     *      "updated_by":1,
     *      "created_at":"2019-02-06 09:58:46",
     *      "updated_at":"2019-02-06 09:58:46",
     *      "attendances": []
     *    }
     * }
     * @response 500{
     *  "data": Error message ...
     * }
     * @response 422{
     *  "success":false,
     *  "data":{
     *      "first_name":["The :attribute field is required."]
     *  }
     * }
     */

    public function store(SchoolMonitoringStoreRequest $request)
    {  
        try {
            $input = $request->only(['batch_name', 'remarks', 'school_year', 'school_type_id']);
            $input['created_by'] = auth()->user()->id;
            $sm = new \App\SchoolMonitoring($input);
            if ($sm->save()) {
                return response()->json(['success' => true, 'data' => $sm], 201);    
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
     *      "id":1,
     *      "batch_name":"Kamonggay",
     *      "remarks": "",
     *      "school_year":"2019",
     *      "school_type_id": 1,
     *      "created_by":1,
     *      "updated_by":1,
     *      "created_at":"2019-02-06 09:58:46",
     *      "updated_at":"2019-02-06 09:58:46",
     *      "attendances": []
     *  }
     * }
     * @response 500{
     *  "data": Error message ...
     * }
     * @response 404{
     *  "message":"Record not found"
     * }
     */
    public function show($id)
    {
        return response()->json(['data' => \App\SchoolMonitoring::findOrFail($id)]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @bodyParam batch_name string required the name of the batch
     * @bodyParam school_year integer requred the year
     * @bodyParam school_type_id integer required the school type (SUYNIL, Life Clas, SOL 1, ...)
     * @bodyParam remarks string optional remarks
     * 
     * @response {
     *  "success":true
     * }
     * @response 500{
     *  "data": Error message ...
     * }
     * @response 422{
     *  "success":false,
     *  "data":{
     *      "first_name":["The :attribute field is required."]
     *  }
     * }
     */
    public function update(SchoolMonitoringUpdateRequest $request, $id)
    {
        try {
            $input = $request->only(['batch_name', 'remarks', 'school_year', 'school_type_id']);
            $input['updated_by'] = auth()->user()->id;

            if ($result = \App\SchoolMonitoring::find($id)->update($input)) {
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
     *  "data": Error message ...
     * }
     * @response 404{
     *  "message":"Record not found"
     * }
     */
    public function destroy($id)
    {
        return response()->json(['success' => \App\SchoolMonitoring::findOrFail($id)->delete()]);
    }
}
