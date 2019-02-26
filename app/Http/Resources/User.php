<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
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
            'username' => $this->username,
            'name' => $this->name,
            'email' => $this->email,
            'api_token' => $this->api_token,
            'avatar' => $this->member ? json_decode($this->member()->avatar, true) : null,
            'avatar_letter' => substr($this->name, 0, 1)
        ];
    }
}
