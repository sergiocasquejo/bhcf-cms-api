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
            'address' => $this->address, 
            'city' => $this->city, 
            'contact_no' => $this->contact_no, 
            'secondary_contact_no' => $this->secondary_contact_no, 
            'facebook_name' => $this->facebook_name, 
            'avatar' => $this->avatar, 
            'school_status' => $this->schoolStatus()->first(),
            'leadership_level' => $this->leadershipLevel()->first(),
            'auxiliary_group' => $this->auxiliaryGroup()->first(),
            'status' => $this->status()->first(),
            'category' => $this->category()->first(),
            'ministries' => $this->ministries()->get(),
            'remarks' => $this->remarks, 
            'created_at' => $this->created_at
        ];
    }
}
