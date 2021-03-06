<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MemberStoreRequest;
use App\Http\Requests\StoreAvatarRequest;
use App;
use Image;
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
        $offset = (int) $request->input('offset');
        $offset = $offset > 1 ? $offset - 1 : 0;
        $limit = $request->input('limit');
        $keywords = $request->input('keywords');
        // $sort = $request->input('sort', 'first_name');
        $order = $request->input('order', 'desc');
        $query = \App\Member::whereRaw('1 = 1');
        if ($keywords) {
            $query->where(function($query) use ($keywords){
                $query->where('first_name', 'like', '%' . $keywords . '%')->orWhere('last_name', 'like', '%' . $keywords . '%');
            });
        }
        
        if ($sort) {
            $query->orderBy($sort, $order);
        } else {
            $query->orderBy('id', 'DESC');
        }
        
        $totalSize = $query->count();
        $members = $query->get();
        $members = $query->skip( $offset * $limit )->take($limit)->get();

        return response()->json(['ok' => true, 'people' =>  MemberResources::collection($members), 'totalSize' => $totalSize], 200);
    }


    public function getAll(Request $request)
    {
        $offset = (int) $request->input('offset');
        $offset = $offset > 1 ? $offset - 1 : 0;
        $limit = $request->input('limit', 20);
        $keywords = $request->input('keywords');
        $sort = $request->input('sort', 'id');
        $order = $request->input('order', 'DESC');
        $query = \App\Member::whereRaw('1 = 1');
        if ($keywords) {
            $query->where(function($query) use ($keywords){
                $query->where('first_name', 'like', '%' . $keywords . '%')->orWhere('last_name', 'like', '%' . $keywords . '%');
            });
        }
        
        if ($sort) {
            $query->orderBy($sort, $order);
        } else {
            $query->orderBy('id', 'DESC');
        }
        
        $totalSize = $query->count();
        $members = $query->get();
        $members = $query->skip( $offset * $limit )->take($limit)->get();

        return response()->json(['ok' => true, 'people' =>  MemberResources::collection($members), 'totalSize' => $totalSize], 200);
    }

    /**
     * Display a list of people by member ID
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
    public function network(Request $request, $id) {
        $offset = (int) $request->input('offset');
        $offset = $offset > 1 ? $offset - 1 : 0;
        $limit = $request->input('limit');
        $members = \App\Member::where('parent_id', $id)->orderBy('id', 'DESC')->get();
        // $totalSize = $query->count();
        // $members = $query->skip( $offset * $limit )->take($limit)->get();

        return response()->json(['ok' => true, 'network' =>  MemberResources::collection($members)], 200);
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @bodyParam parent_id int optional the ID of the leader
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
     *  "data": "Error message ..."
     * }
     * @response 422{
     *  "ok":false,
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
            $input = $request->only([
                'new_avatar',
                'first_name', 
                'last_name', 
                'middle_name', 
                'nick_name', 
                'birthdate',
                'gender',
                'city', 
                'address', 
                'parent_id',
                'auxiliary_group_id', 
                'status_id',
                'school_status_id',
                'category_id', 
                'leadership_level_id',
                'email', 
                'contact_no', 
                'secondary_contact_no', 
                'facebook_name',
                'remarks',
                ]);

            $input = array_filter($input, function($value) { return $value !== '' && $value !== null; });
            $input['created_by'] = Auth()->user()->id;
            $input['birthdate'] = date('Y-m-d', strtotime($input['birthdate']));
            if (isset($input['new_avatar'])) {
                $input['avatar'] = $this->processBase64Avatar($input['new_avatar']);
            }



            $member = new \App\Member($input);
            if ($member->save()) {
                $member->ministries()->detach();
                if ($request->input('ministries')) {
                    $member->ministries()->attach($request->input('ministries'));
                }
                return response()->json(['ok' => true, 'data' => new MemberResources($member)], 201);    
            } else {
                return response()->json(['ok' => false, 'data' => 'Unsuccessfull save.'], 200);
            }
        } catch(\Exception $e) {
            return response()->json(['data' => $e->getMessage()], 500);
        }

    }

    private function processBase64Avatar($avatar) {
        if (preg_match('/^data:image\/(\w+);base64,/', $avatar, $type)) {
            $encoded_base64_image = substr($avatar, strpos($avatar, ',') + 1);
            $type = strtolower($type[1]);

            $decoded_image = base64_decode($encoded_base64_image);
            if ($avatar = $this->uploadMemberAvatar($decoded_image,  "avatar-".time().".jpg")) {
                return  json_encode($avatar);
            }
        }
        
        return '';
        
    }


     /**
     * Display the specified resource.
     *
     * @response {
     *  "data":{
     *      "id":103,
     *      "user_id":null,
     *      "parent_id":null,
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
     *  "data": "Error message ..."
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
     * @bodyParam parent_id int optional the ID of the leader
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
     * @bodyParam school_status_id int optional the school status member
     * @bodyParam leadership_level_id int optional the leadership id of the member
     * @bodyParam auxiliary_group_id int optional the auxiliary group of the member
     * @bodyParam status_id int optional the status of the member
     * @bodyParam category_id int optional the category of the member
     * @bodyParam remarks string optional the remarks
     * @bodyParam _method string required options(PUT|PATCH)
     * @response {
     *  "ok": true,
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
     *  "data": "Error message ..."
     * }
     * @response 422{
     *  "ok":false,
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
            $input = $request->only([
                'new_avatar',
                'first_name', 
                'last_name', 
                'middle_name', 
                'nick_name', 
                'birthdate',
                'gender',
                'city', 
                'address', 
                'parent_id',
                'auxiliary_group_id', 
                'status_id',
                'school_status_id',
                'category_id', 
                'leadership_level_id',
                'email', 
                'contact_no', 
                'secondary_contact_no', 
                'facebook_name',
                'remarks',
                ]);
            $input = array_filter($input, function($value) { return $value !== '' && $value !== null; });


            $input['updated_by'] = auth()->user()->id;
            $input['birthdate'] = date('Y-m-d', strtotime($input['birthdate']));

            if (isset($input['new_avatar'])) {
                $input['avatar'] = $this->processBase64Avatar($input['new_avatar']);
                
            }

            $member = \App\Member::findOrFail($id);
            
            if ($request->input('ministries')) {
                $member->ministries()->detach();
                $member->ministries()->attach($request->input('ministries'));
            }

            if ($result = $member->update($input)) {
                return response()->json(['ok' => true, 'data' => new MemberResources($member)], 201);    
            } else {
                return response()->json(['ok' => false, 'data' => 'Unsuccessfull update.'], 200);
            }
        } catch(\Exception $e) {
            return response()->json(['ok' => false, 'data' => $e->getMessage()], 200);
        }
    }


    /**
     * Approve and Unapprove Member
     *
     * @bodyParam is_approve int required 1|0
     * @bodyParam _method string required options(PUT|PATCH)
     * @response {
     *  "ok": true,
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
     *  "data": "Error message ..."
     * }
     * @response 422{
     *  "ok":false,
     *  "data":{
     *      "first_name":["First name is required!"]
     *  }
     * }
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function approve(Request $request, $id)
    {
        try {
            $input = $request->only('is_approved');
            $input['updated_by'] = auth()->user()->id;
            if ($result = \App\Member::find($id)->update($input)) {
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
    public function destroy(Request $request, $id)
    {
        return response()->json(['ok' => \App\Member::findOrFail($id)->delete()]);
    }


    /**
     * Update member profile picture
     *
     * @bodyParam avatar file optional the file from file upload
     * @bodyParam _method string required options(PUT|PATCH)
     * @response {
     *  "ok": true,
     *  "avatar":{
     *      "original":"public_path/avatar/avatar.jpg",
     *      "thumbnail": "..."
     *  }
     * }
     * @response 500{
     *  "data": "Error message ..."
     * }
     * @response 422{
     *  "ok":false,
     *  "data":{
     *      "first_name":["avatar is required!"]
     *  }
     * }
     */

    public function uploadAvatar(StoreAvatarRequest $request, $id) {
        try {
            $member = \App\Member::findOrFail($id);
            $originalImage = $request->file('avatar');
            

            $avatar = $this->uploadMemberAvatar($originalImage, "avatar-".time().".png");
            //Get all file
            $oldAvatar = $member->avatar ? json_decode($member->avatar) : false;
            $member->avatar = json_encode($avatar);
            if ($member->save() && $oldAvatar) {
                $this->deleteOldAvatar($oldAvatar);
            }


            return response()->json([
                'ok' => true,
                'avatar' => $avatar
            ]);
        } catch(\Exception $e) {
            return response()->json(['data' => $e->getMessage()], 500);
        }
    }


    public function uploadAvatarMobile(Request $request, $id) {
        try {
            $member = \App\Member::findOrFail($id);
            $originalImage = $request->input('avatar');

            
            

            $avatar = $this->uploadMemberAvatar($originalImage, "avatar-".time().".png");
            //Get all file
            $oldAvatar = $member->avatar ? json_decode($member->avatar) : false;
            $member->avatar = json_encode($avatar);
            if ($member->save() && $oldAvatar) {
                $this->deleteOldAvatar($oldAvatar);
            }


            return response()->json([
                'ok' => true,
                'avatar' => json_encode($avatar)
            ]);
        } catch(\Exception $e) {
            return response()->json(['data' => $e->getMessage()], 500);
        }
    }

    private function deleteOldAvatar($avatar) {
        if ($avatar) {
            //Delete old file
            foreach($avatar as $k => $file) {
                if (file_exists($file)) {
                    $file = str_replace(url('/'), '', $file);
                    unlink(public_path() . $file);
                }
            }
        }

    }

    private function uploadMemberAvatar($originalImage, $newFileName){
        try {
            ini_set('memory_limit', '256M');
            $profilePath = config('sitesettings.profile.location');

            $originalFile = $profilePath . $newFileName;
            // $avatar = [
            //     'original' => str_replace(public_path(), url('/'), $originalFile)
            // ];
            

            // $thumbnailImage->save($originalFile);

            foreach(config('sitesettings.profile.sizes') as $k => $v) {
                if (isset($v[0])) {
                    $thumbnailImage = \Intervention\Image\Facades\Image::make($originalImage);
            
            
                    $width = $v[0];
                    $height = isset($v[1]) ? $v[1] : $width;

                    $file = $profilePath . "_{$width}x{$height}_" . time() . ".png";
                    
                    $thumbnailImage->resize($width, $height, function($constraint){
                        $constraint->aspectRatio();
                    });
                    $thumbnailImage->encode('png');
                    $thumbnailImage->save($file);
                    $avatar[$k] = str_replace(public_path(), url('/'), $file);
                }
            }
            
            return $avatar;
        } catch(\Exception $e) {
            return response()->json(['data' => $e->getMessage()], 500);
        }
        return false;
    }


    public function dropdownOptions(Request $request) {
        try {
            return response()->json([ 
                    'ok' => true,
                    'data' => [
                        'leadership_levels' =>\App\LeadershipLevel::select(['id', 'name'])->get(), 
                        'auxiliary_groups' => \App\AuxiliaryGroup::select(['id', 'name'])->get(),
                        'categories' => \App\MemberCategory::select(['id', 'name'])->get(),
                        'ministries' => \App\Ministry::select(['id', 'name'])->get(),
                        'class_categories' => \App\ClassCategory::select(['id', 'name'])->get(),
                        'statuses' => \App\Status::select(['id', 'name'])->get(),
                    ]
            ]);
        } catch(\Exception $e) {
            return response()->json(['data' => $e->getMessage()], 500);
        }
    }
}
