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
        'nick_name',
        'email',
        'gender', 
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
        'remarks',
        'created_by',
        'is_approved'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function ministries() {
        return $this->belongsToMany(Ministry::class, 'member_to_ministry', 'member_id', 'ministry_id');
    }

    public function leadershipLevel() {
        return $this->hasOne(LeadershipLevel::class, 'id', 'leadership_level_id');
    }

    public function schoolStatus() {
        return $this->hasOne(SchoolStatus::class, 'id', 'school_status_id');
    }

    public function auxiliaryGroup() {
        return $this->hasOne(AuxiliaryGroup::class, 'id', 'auxiliary_group_id');
    }

    public function status() {
        return  $this->hasOne(Status::class, 'id', 'status_id');
    }

    public function leader() {
        return $this->belongsTo(static::class, 'leader_id', 'id')->select(array('id', 'nick_name'));
    }

    public function cellgroups() {
        return $this->hasMany(static::class, 'leader_id', 'id')->select(array('id', 'first_name', 'last_name', 'middle_name'));
    }

    public function invitedBy() {
        return $this->belongsTo(static::class, 'invited_by', 'id')->select(array('id', 'first_name', 'last_name', 'middle_name'));
    }

    public function attendances() {
        return $this->belongsToMany(Attendances::class, 'id', 'member_id');
    }
    
    public function category() {
        return $this->hasOne(MemberCategory::class, 'id', 'category_id');
    }

    public function saveUser($user_id) {
        $this->user_id = $user_id;
        $this->save();

        return $this->user_id;
    }


    public function cellGroupAttendances() {
        $this->hasMany(CellGroupAttedance::class, 'id', 'member_id');
    }
    
    public function getFullNameAttribute()
    {
        $initial = substr($this->middle_name, 0, 1);
        return "{$this->first_name} {$initial} {$this->last_name}";
    }

    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = ucfirst($value);
    }

    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = ucfirst($value);
    }

    public function setMiddleNameAttribute($value)
    {
        $this->attributes['middle_name'] = ucfirst($value);
    }

    public function getCreatedAtAttribute($date)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }

    public function getUpdatedAtAttribute($date)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }
}
