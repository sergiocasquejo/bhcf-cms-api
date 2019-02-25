<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    
    protected $table = 'school_classes';

    public $classTypes = ['SUYNIL', 'LifeClass', 'SOL'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'batch_name',
        'remarks',
        'school_year',
        'class_type',
        'created_by',
        'updated_by'
    ];
}
