<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PeopleWithStudent extends JsonResource
{
     /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {   
        $person = \App\Member::find($this->id);

        return [
            'id' => $this->id,
            'avatar' => !$person->avatar ? $person->avatar : json_decode($person->avatar, true)['small'],
            'nick_name' =>$person->nick_name,
            'full_name' => $person->full_name,
            'is_exist' => $this->is_exist
        ];
    }
}
