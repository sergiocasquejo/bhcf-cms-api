<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SundayService extends JsonResource
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
            'id' => $this->attendance_id,
            'member_id' => $this->id,
            'avatar' => $this->avatar,
            'nick_name' => $this->nick_name,
            'full_name' => $this->full_name,
            'attended' => $this->attended,
            'date_attended' => $this->date_attended,
            'yearweek' => $this->yearweek,
            'count' => $this->countSundayServiceAttended(),
            'leader_id' => $this->parent_id
        ];
    }
}
