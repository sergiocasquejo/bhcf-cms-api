<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SOL extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    
    protected $table = 'sols';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'school_monitory_id',
        'member_id',
        'w1_devo',
        'w1_activity',
        'w2_devo',
        'w2_activity',
        'w3_devo',
        'w3_activity',
        'w4_devo',
        'w4_activity',
        'w5_devo',
        'w5_activity',
        'w6_devo',
        'w6_activity',
        'w7_devo',
        'w7_activity',
        'w8_devo',
        'w8_activity',
        'w9_devo',
        'w9_activity',
        'w10_devo',
        'w10_activity',
        'remarks',
        'created_by',
        'updated_by'
    ];
}
