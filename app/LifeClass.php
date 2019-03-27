<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LifeClass extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    
    protected $table = 'life_classes';

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
        'remarks',
        'created_by',
        'updated_by'
    ];


    public function students() {
        return $this->hasMany(Member::class, 'member_id', 'id');
    }
    
    public static function findByMemberIDAndClassID($classID, $memberID) {
        return static::withTrashed()->where('school_class_id', $classID)->where('member_id', $memberID)->first();
    }
}
