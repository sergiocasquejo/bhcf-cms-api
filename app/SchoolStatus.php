<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SchoolStatus extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'school_statuses';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descriptions', 'name', 'created_by', 'updated_by'
    ];

    public function member() {
        return $this->belongsTo('App\Member');
    }


    public function schoolClass() {
        return $this->belongsTo(SchoolClass::class, 'id', 'school_type_id');
    }
}
