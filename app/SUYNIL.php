<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SUYNL extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    
    protected $table = 'suynils';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'school_monitory_id',
        'member_id',
        'level_1',
        'level_2',
        'level_3',
        'level_4',
        'level_5',
        'level_6',
        'level_7',
        'level_8',
        'level_9',
        'level_10',
        'remarks',
        'created_by',
        'updated_by'
    ];

    public static function findByMemberIDAndClassID($classID, $memberID) {
        return static::withTrashed()->where('school_class_id', $classID)->where('member_id', $memberID)->first();
    }
}
