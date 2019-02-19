<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SchoolClassStoreRequest;
use App\Http\Requests\SchoolClassUpdateRequest;

/**
 * @group School Monitoring management
 *
 * APIs for managing statuses
 */

class SchoolClassController extends Controller
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
        $results = \App\SchoolClass::all();

        return response()->json(['success' => true, 'data' => $results], 200);
    }

    /**
     * Update student attendance
     *
     * @bodyParam id int required the ID of the row
     * @bodyParam member_id int required the ID of the member
     * @bodyParam school_class_id int required the ID of the class
     * @bodyParam column_name string the table column name to update for SUYNIL its (level_1, level_2 until level_10), 
     * for SOL (w1_devo, w1_activity, w2_devo, w2_activity until w10_devo, w10_activity),
     * for LifeClass (w1_devo, w1_activity, w2_devo, w2_activity until w9_devo, w9_activity)
     * @bodyParam is_attended int required expected values(1, 0)
     * 
     * @response {
     *  "success":true,
     *  "data":{
     *   "member_id":1,
     *   "school_class_id":1,
     *   "level_1":0,
     *  "level_2":0,
     *  "updated_at":"2019-02-06 12:49:41",
     *  "created_at":"2019-02-06 12:49:41",
     *  "id":1
     *  }
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

    public function updateMemberAttendance(Request $request) {
        try {
            $classID = $request->school_class_id;
            $pkID = $request->id;
            $class = \App\SchoolClass::findOrFail($classID);
            $input = [];
            $input[$request->column_name] = (int)$request->is_attended;
            $input['updated_by'] = auth()->user()->id;
            $student = null;
            switch($class->class_type) {
                case 'SUYNIL':
                    $student = \App\SUYNIL::findOrFail($pkID);
                    break;
                case 'LifeClass':
                    $student = \App\SOL::findOrFail($pkID);
                    break;
                case 'SOL':
                    $student = \App\LifeClass::findOrFail($pkID);
                    break;
            }

            if ($student->update($input)) {
                return response()->json(['success' => true, 'data' => $student], 201);    
            } else {
                return response()->json(['success' => false, 'data' => 'Unsuccessfull save.'], 200);
            }
        } catch(\Exception $e) {
            return response()->json(['data' => $e->getMessage()], 500);
        }
        
    }


    /**
     * Enroll new member to the class.
     *
     * @bodyParam member_id int required the ID of the member
     * @bodyParam school_class_id int required the ID of the class
     * 
     * @response {
     *  "success":true,
     *  "data":{
     *   "member_id":1,
     *   "school_class_id":1,
     *   "level_1":0,
     *  "level_2":0,
     *  "updated_at":"2019-02-06 12:49:41",
     *  "created_at":"2019-02-06 12:49:41",
     *  "id":1
     *  }
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


    public function enrollMember(Request $request) {
        try {
            $input = $request->only(['member_id', 'school_class_id']);
            $class = \App\SchoolClass::findOrFail($input['class_id']);
            $student = null;
            switch($class->class_type) {
                case 'SUYNIL':
                    $student = new \App\SUYNIL($input);
                    break;
                case 'LifeClass':
                    $student = new \App\SOL($input);
                    break;
                case 'SOL':
                    $student = new \App\LifeClass($input);
                    break;
            }

            if ($student->save()) {
                return response()->json(['success' => true, 'data' => $sm], 201);    
            } else {
                return response()->json(['success' => false, 'data' => 'Unsuccessfull save.'], 200);
            }

        }catch(\Exception $e) {
            return response()->json(['data' => $e->getMessage()], 500);
        }

    }

     /**
     * Search unenrolled member
     *
     * @queryParm keywords string The keywords for search
     * @queryParm class_id integer The class ID
     * @response [{
     *  "first_name":"serg",
     *  "last_name":"casquejo",
     *  "middle_name":"degamo",
     *  "birthdate":"1989-09-07",
     *  "address":"Colo, camolinas, poblacion, cordova, cebu",
     *  "city":"Cebu",
     *  "contact_no":"09219945312",
     *  "updated_at":"2019-02-06 09:59:04",
     *  "created_at":"2019-02-06 09:59:04",
     *  "id":101
     * }]
     */
    public function searchUnEnrolledMember(Request $request) {
        try {
            $keywords = $request->keywords;
            $classID = $request->class_id;
            $class = \App\SchoolClass::findOrFail($classId);
            switch($class->class_type) {
                case 'SUYNIL':
                    $memberIDs = \App\SUYNIL::pluck('member_id')->where('school_class_id', $classID);
                    break;
                case 'LifeClass':
                    $memberIDs = \App\SOL::pluck('member_id')->where('school_class_id', $classID);
                    break;
                case 'SOL':
                    $memberIDs = \App\LifeClass::pluck('member_id')->where('school_class_id', $classID);
                    break;
            }

            $members = \App\Member::orWhere(function($query) use ($keywords){
                $query->where('first_name', 'like', '%' . $keywords . '%');
                $query->orWhere('last_name', 'like', '%' . $keywords . '%');
            })->whereNotIn('member_id', $memberIDs)->get();

            return response()->json(['success' => true, 'data' => $members], 200);
        }catch(\Exception $e) {
            return response()->json(['data' => $e->getMessage()], 500);
        }
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
     *  "data": "Error message ..."
     * }
     * @response 422{
     *  "success":false,
     *  "data":{
     *      "first_name":["The :attribute field is required."]
     *  }
     * }
     */

    public function store(SchoolClassStoreRequest $request)
    {  
        try {
            $input = $request->only(['batch_name', 'remarks', 'school_year', 'school_type_id']);
            $input['created_by'] = auth()->user()->id;
            $sm = new \App\SchoolClass($input);
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
     *  "data": "Error message ..."
     * }
     * @response 404{
     *  "message":"Record not found"
     * }
     */
    public function show($id)
    {
        return response()->json(['data' => \App\SchoolClass::findOrFail($id)]);
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
     *  "data": "Error message ..."
     * }
     * @response 422{
     *  "success":false,
     *  "data":{
     *      "first_name":["The :attribute field is required."]
     *  }
     * }
     */
    public function update(SchoolClassUpdateRequest $request, $id)
    {
        try {
            $input = $request->only(['batch_name', 'remarks', 'school_year', 'school_type_id']);
            $input['updated_by'] = auth()->user()->id;

            if ($result = \App\SchoolClass::find($id)->update($input)) {
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
        return response()->json(['success' => \App\SchoolClass::findOrFail($id)->delete()]);
    }
}
