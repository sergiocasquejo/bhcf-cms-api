<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SundayCelebrationStatus extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    
    protected $table = 'sunday_celebration_statuses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'descriptions',
        'created_by',
        'updated_by'
    ];
}
