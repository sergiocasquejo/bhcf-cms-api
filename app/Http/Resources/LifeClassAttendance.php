<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LifeClassAttendance extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $person = \App\Member::find($this->member_id);

        return [
            'id' => $this->id,
            'avatar' => !$person->avatar ? $person->avatar : json_decode($person->avatar, true)['small'],
            'nick_name' =>$person->nick_name,
            'full_name' => $person->full_name,
            'w1_devo' => $this->w1_devo,
            'w1_activity' => $this->w1_activity,
            'w2_devo' => $this->w2_devo,
            'w2_activity' => $this->w2_activity,
            'w3_devo' => $this->w3_devo,
            'w3_activity' => $this->w3_activity,
            'w4_devo' => $this->w4_devo,
            'w4_activity' => $this->w4_activity,
            'w5_devo' => $this->w5_devo,
            'w5_activity' => $this->w5_activity,
            'w6_devo' => $this->w6_devo,
            'w6_activity' => $this->w6_activity,
            'w7_devo' => $this->w7_devo,
            'w7_activity' => $this->w7_activity,
            'w8_devo' => $this->w8_devo,
            'w8_activity' => $this->w8_activity,
            'w9_devo' => $this->w9_devo,
            'w9_activity' => $this->w9_activity,
            'status' => $this->status,
            'remarks' => $this->remarks,
        ];
    }
}
