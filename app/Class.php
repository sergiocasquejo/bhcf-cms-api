<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SchoolClass extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    
    protected $table = 'classes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'batch_name',
        'remarks',
        'school_year',
        'school_type',
        'created_by',
        'updated_by'
    ];

    

    public function schoolType() {
        return $this->hasMany(ClassCategory::class, 'school_type', 'id');
    }

    public function lifeClasses() {
        return $this->hasMany(LifeClass::class, 'school_class_id', 'id');
    }

    public function sols() {
        return $this->hasMany(SOL::class, 'school_class_id', 'id');
    }

    public function suynls() {
        return $this->hasMany(SUYNLS::class, 'school_class_id', 'id');
    }


}
