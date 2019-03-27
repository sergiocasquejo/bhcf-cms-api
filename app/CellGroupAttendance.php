<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CellGroupAttendance extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    
    protected $table = 'cell_group_attedances';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'member_id',
        'attendance_date',
        'attended',
        'created_by',
        'updated_by'
    ];

    public function member() {
        return $this->belongsTo('App\Member');
    }

}
