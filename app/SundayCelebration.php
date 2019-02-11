<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SundayCelebration extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    
    protected $table = 'sunday_celebrations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'member_id',
        'date',
        'sc_status_id',
        'created_by',
        'updated_by'
    ];
}
