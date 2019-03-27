<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ministry extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ministries';
    //Create fillable columns
    protected $fillable = [
        'descriptions', 'name', 'created_by', 'updated_by'
    ];
    
    public function user() {
        return $this->belongsToMany('App\User');
    }
}
