<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SundayCelebration extends Model
{
    use SoftDeletes;
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
        'date_attended',
        'attend',
        'status',
        'created_by',
        'updated_by'
    ];
}
