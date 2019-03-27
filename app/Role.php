<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'roles';
    protected $fillable = [
        'descriptions', 'name', 'created_by', 'updated_by'
    ];

    public function member() {
        $this->belongsTo('App\Member');
    }

    /**
     * The users that belong to the role.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = str_slug($value);
    }
}
