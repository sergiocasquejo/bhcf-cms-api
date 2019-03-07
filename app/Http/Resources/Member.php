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
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
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
            'secondary_contact_no' => $this->secondary_contact_no, 
            'facebook_name' => $this->facebook_name, 
            'avatar' => json_decode($this->avatar, true), 
            'school_status_id' => $this->school_status_id,
            'school_status' => $this->schoolStatus()->select(['id','name'])->first(),
            'leadership_level_id' => $this->leadership_level_id,
            'leadership_level' => $this->leadershipLevel()->select(['id','name'])->first(),
            'auxiliary_group_id' => $this->auxiliary_group_id,
            'auxiliary_group' => $this->auxiliaryGroup()->select(['id','name'])->first(),
            'status_id' => $this->status_id,
            'status' => $this->status()->select(['id','name'])->first(),
            'category' => $this->category()->select(['id','name'])->first(),
            'category_id' => $this->category_id,
            'ministry_ids' => $this->ministries()->pluck('id'),
            'my_ministries' => $this->ministries()->get(),
            'remarks' => $this->remarks, 
            'created_at' => $this->created_at,
            'is_approved' => $this->is_approved,
        ];
    }

    
}
