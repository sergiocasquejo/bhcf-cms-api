<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;

/**
 * @group User management
 *
 * APIs for managing user
 */

class UserController extends Controller
{

     /**
     * Store a newly created resource in storage.
     *
     * @bodyParam username string required the username of the user
     * @bodyParam name string required display name of the user
     * @bodyParam email string required the email of the user
     * @bodyParam password string required the password of the user
     * @bodyParam confirm_password string required the password confirmation
     * @bodyParam roles array(int) required array of role ID of the user
     * @bodyParam member_id int optional the member id
     * 
     * @response {
     *  "success":true,
     *  "data":{
     *  "username":"bhcf_admin",
     *  "name":"BHCF",
     *  "email":"admin@bhcf.com",
     *  "updated_at":"2019-02-06 12:49:41",
     *  "created_at":"2019-02-06 12:49:41",
     *  "id":2
     *  }
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

    public function store(UserStoreRequest $request)
    {
        try {
            $credentials = $request->only(['username', 'name', 'email', 'password', 'member_id']);
            $roles = $request->input('roles');
            if (isset($credentials['member_id']) && $credentials['member_id'] > 0) {
                $member = \App\Member::findOrFail($credentials['member_id']);
            }

            
            $credentials['password'] =  \Hash::make($credentials['password']);
            $user = new \App\User($credentials);

            if ($user->save()) {
                 //Detach the roles first
                 $user->roles()->detach();
                 //Attach new roles
                 $user->roles()->attach($roles);
                
                $member->saveUser($user->id);

                return response()->json(['success' => true, 'data' => $user], 201);    
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
     */
    public function show($id)
    {
        return response()->json(['data' => \App\User::findOrFail($id)]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @bodyParam name string required display name of the user
     * @bodyParam email string required the email of the user
     * @bodyParam roles array(int) required array of role ID of the user
     * @bodyParam id int required the ID of the user
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
    public function update(UserUpdateRequest $request, $id)
    {
        try {
            $credentials = $request->only(['name', 'email']);
            $roles = $request->input('roles');
            $user = \App\User::find($id);
            if ($result = $user->update($credentials)) {
                //Detach the roles first
                $user->roles()->detach();
                //Attach new roles
                $user->roles()->attach($roles);
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
        return response()->json(['success' => \App\User::findOrFail($id)->delete()]);
    }
}
