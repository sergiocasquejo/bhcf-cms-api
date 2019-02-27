<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name', 'email', 'password', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function member() {
        return $this->hasOne('App\Member', 'id', 'user_id');
    }

    public function generateToken()
    {
        $this->api_token = str_random(60);
        $this->save();

        return $this->api_token;
    }

    public function roles() {
        return $this->belongsToMany('App\Role', 'user_to_roles', 'user_id', 'role_id');
    }


    public function getCanManageOptionsAttribute()
    {

        $canManageOptions = false;
        foreach($this->roles as $role) {
            if ($role->name == 'administrator') {
                $canManageOptions = true;
                break;
            }
        }

        return $canManageOptions;
    }
}
