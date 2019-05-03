<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Member extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $user = $this->user()->first();
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'parent_id' => $this->parent_id,
            'leader' => $this->leader()->first(),
            'invited_by' => $this->invitedBy()->first(),
            'total_cellgroups' => $this->cellgroups()->count(),
            'full_name' => $this->full_name,
            'nick_name' => $this->nick_name,
            'email' => $this->email,
            'first_name' => $this->first_name, 
            'last_name' => $this->last_name, 
            'middle_name' => $this->middle_name,  
            'gender' => $this->gender, 
            'birthdate' => $this->birthdate, 
            'is_birthday_today' => date('m-d', strtotime($this->birthdate)) ==  date('m-d'),
            'address' => $this->address, 
            'city' => $this->city, 
            'contact_no' => $this->contact_no, 
            'total_network' => $this->siblings()->count(),
            'secondary_contact_no' => $this->secondary_contact_no, 
            'facebook_name' => $this->facebook_name, 
            'avatar' => json_decode($this->avatar, true), 
            'school_status_id' => $this->school_status_id,
            'class_category' => $this->classCategory()->select(['id','name', 'label'])->first(),
            'leadership_level_id' => $this->leadership_level_id,
            'leadership_level' => $this->leadershipLevel()->select(['id','name'])->first(),
            'auxiliary_group_id' => $this->auxiliary_group_id,
            'auxiliary_group' => $this->auxiliaryGroup()->select(['id','name'])->first(),
            'civil_status' => $this->civil_status,
            'status' => $this->status,
            'category' => $this->category()->select(['id','name'])->first(),
            'category_id' => $this->category_id,
            'ministry_ids' => $this->ministries()->pluck('id'),
            'my_ministries' => $this->ministries()->get(),
            'remarks' => $this->remarks, 
            'created_at' => $this->created_at,
            'is_approved' => $this->is_approved,
            'count_cg' => $this->countCellGroupAttended(),
            'count_sc' => $this->countSundayServiceAttended(),
            'account' => $this->user()->first(),
            'user_login' => $user? $user->username : null,
            'user_email' =>  $user? $user->email : null,
            'user_display_name' =>  $user? $user->name : null,
            'api_token' =>  $user? $user->api_token : null
        ];
    }

    
}
