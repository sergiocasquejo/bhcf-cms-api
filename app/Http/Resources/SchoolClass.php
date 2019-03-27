<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SchoolClass extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $total_students  = 0;
        switch($this->school_type) {
            case 1: 
                $total_students = $this->suynils()->count();
                break;
            case 2:
                $total_students = $this->lifeClasses()->count();
                break;
            case 3:
            case 4: 
            case 5:
                $total_students = $this->sols()->count();
                break;
            default:
                $total_students = 0;
        }
        return [
            'id' => $this->id,
            'batch_name' =>$this->batch_name,
            'school_year' => $this->school_year,
            'remarks' => $this->remarks,
            'school_type' => $this->school_type,
            'total_students' => $total_students
        ];
    }
}
