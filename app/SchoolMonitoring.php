<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolMonitoring extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    
    protected $table = 'school_monitorings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'batch_name',
        'remarks',
        'school_year',
        'school_type_id',
        'created_by',
        'updated_by'
    ];

    function scopeWithAttendances($query) {
        
    }
}
