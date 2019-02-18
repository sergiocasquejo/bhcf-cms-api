<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MemberStoreRequest;
use App;
use App\Http\Resources\Member as MemberResources;
/**
 * @group Member management
 *
 * APIs for managing member
 */
class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @queryParm keywords The keywords for search
     * @queryParam offset The page offset to return
     * @queryParam limit required The number of rows to return
     * @queryParam sort Field to sort by
     * @queryParam sortBy Ascending or descending
     * 
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
    public function index(Request $request)
    {
        $query = \App\Member::where(['leader_id' => \Auth::id()]);
        if ($request->keywords) {
            $keywords = $request->keywords;
            $query->orWhere(function($query) use ($keywords){
                $query->where('first_name', 'like', '%' . $keywords . '%');
                $query->orWhere('last_name', 'like', '%' . $keywords . '%');
            });
        }

        if ($request->sort) {
            $query->orderBy($request->sort);
        }

        $query = $query->get();

        return response()->json(['success' => true, 'data' => $members], 200);
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @bodyParam leader_id int optional the ID of the leader
     * @bodyParam invited_by int optional the ID of the member
     * @bodyParam first_name string required the first name of the member
     * @bodyParam last_name string required the last name of the member
     * @bodyParam middle_name string required the middle name of the member
     * @bodyParam birthdate string required (YYYY-mm-dd) the birthdate of the member
     * @bodyParam address string required the address of the member
     * @bodyParam city string required the city of the member
     * @bodyParam contact_no string required the contact no of the member
     * @bodyParam secondary_contact_no string optional the secondary no of the member
     * @bodyParam facebook_name string optional the facebook username of the member
     * @bodyParam avatar string optional the image url of the member
     * @bodyParam school_status_id int optional the school status member
     * @bodyParam leadership_level_id int optional the leadership id of the member
     * @bodyParam auxiliary_group_id int optional the auxiliary group of the member
     * @bodyParam status_id int optional the status of the member
     * @bodyParam category_id int optional the category of the member
     * @bodyParam remarks string optional the remarks
     * 
     * @response {
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
     * }
     * @response 500{
     *  "data": Error message ...
     * }
     * @response 422{
     *  "success":false,
     *  "data":{
     *      "first_name":["First name is required!"]
     *  }
     * }
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemberStoreRequest $request)
    {
        try {
            $input = $request->all();
            $input['created_by'] = auth()->user()->id;

            $member = new \App\Member($input);
            if ($member->save()) {
                return response()->json(['success' => true, 'data' => new MemberResources($member->id)], 201);    
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
     *  "data":{
     *      "id":103,
     *      "user_id":null,
     *      "leader_id":null,
     *      "invited_by":null,
     *      "first_name":"Sergio",
     *      "last_name":"casquejo",
     *      "middle_name":"degamo",
     *      "birthdate":"1989-09-07",
     *      "address":"Colo, camolinas, poblacion, cordova, cebu",
     *      "city":"cebu",
     *      "contact_no":"09219945112",
     *      "secondary_contact_no":null,
     *      "facebook_name":null,
     *      "avatar":null,
     *      "school_status_id":null,
     *      "leadership_level_id":null,
     *      "auxiliary_group_id":null,
     *      "status_id":null,
     *      "category_id":null,
     *      "remarks":null,
     *      "created_by":null,
     *      "created_at":"2019-02-06 11:28:46",
     *      "updated_at":"2019-02-06 11:48:27",
     *      "deleted_at":null
     *     }
     * }
     * @response 500{
     *  "data": Error message ...
     * }
     * @response 404{
     *  "message":"Record not found"
     * }
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = \App\Member::findOrFail($id);
        return response()->json(['data' => new MemberResources($member)]);
    }


    /**
     * Update resource in storage.
     *
     * @bodyParam leader_id int optional the ID of the leader
     * @bodyParam invited_by int optional the ID of the member
     * @bodyParam first_name string required the first name of the member
     * @bodyParam last_name string required the last name of the member
     * @bodyParam middle_name string required the middle name of the member
     * @bodyParam birthdate string required (YYYY-mm-dd) the birthdate of the member
     * @bodyParam address string required the address of the member
     * @bodyParam city string required the city of the member
     * @bodyParam contact_no string required the contact no of the member
     * @bodyParam secondary_contact_no string optional the secondary no of the member
     * @bodyParam facebook_name string optional the facebook username of the member
     * @bodyParam avatar string optional the image url of the member
     * @bodyParam school_status_id int optional the school status member
     * @bodyParam leadership_level_id int optional the leadership id of the member
     * @bodyParam auxiliary_group_id int optional the auxiliary group of the member
     * @bodyParam status_id int optional the status of the member
     * @bodyParam category_id int optional the category of the member
     * @bodyParam remarks string optional the remarks
     * @bodyParam _method string required options(PUT|PATCH)
     * @response {
     *  "success": true,
     *  data: {
     *      "first_name":"serg",
     *      "last_name":"casquejo",
     *      "middle_name":"degamo",
     *      "birthdate":"1989-09-07",
     *      "address":"Colo, camolinas, poblacion, cordova, cebu",
     *      "city":"Cebu",
     *      "contact_no":"09219945312",
     *      "updated_at":"2019-02-06 09:59:04",
     *      "created_at":"2019-02-06 09:59:04",
     *      "id":101
     *    }
     * }
     * @response 500{
     *  "data": Error message ...
     * }
     * @response 422{
     *  "success":false,
     *  "data":{
     *      "first_name":["First name is required!"]
     *  }
     * }
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(MemberStoreRequest $request, $id)
    {
        try {
            $input = $request->all();
            $input['updated_by'] = auth()->user()->id;
            if ($result = \App\Member::find($id)->update($input)) {
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
        return response()->json(['success' => \App\Member::findOrFail($id)->delete()]);
    }
}
