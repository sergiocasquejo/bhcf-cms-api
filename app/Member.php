<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    
    protected $table = 'members';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'leader_id',
        'invited_by',
        'first_name', 
        'last_name', 
        'middle_name', 
        'birthdate', 
        'address', 
        'city',
        'contact_no',
        'secondary_contact_no',
        'facebook_name',
        'avatar',
        'school_status_id',
        'leadership_level_id',
        'auxiliary_group_id',
        'status_id',
        'category_id',
        'remarks'
    ];

    public function user() {
        $this->belongsTo('App\User');
    }


    public function ministries() {
        $this->hasMany('App\Ministry', 'member_id', 'id');
    }

    public function leadershipLevels() {
        $this->hasOne('App\LeadershipLevel', 'leadership_level_id', 'id');
    }

    public function schoolStatus() {
        $this->hasOne('App\SchoolStatus', 'school_status_id', 'id');
    }

    public function auxiliaryGroup() {
        $this->hasOne('App\AuxiliaryGroup', 'auxiliary_group_id', 'id');
    }

    public function status() {
        $this->hasOne('App\Status', 'status_id', 'id');
    }

    public function leader() {
        $this->hasOne('App\Member', 'leader_id', 'id');
    }

    public function invitedBy() {
        $this->hasOne('App\Member', 'invited_by', 'id');
    }

    public function attendances() {
        $this->belongsToMany('App\Attendances', 'id', 'member_id');
    }

    public function saveUser($user_id) {
        $this->user_id = $user_id;
        $this->save();

        return $this->user_id;
    }

}
