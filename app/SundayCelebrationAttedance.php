<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SundayCelebrationAttedance extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    
    protected $table = 'sunday_celebration_attedances';

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
