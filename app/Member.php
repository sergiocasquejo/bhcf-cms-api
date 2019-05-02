<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;

class Member extends Model
{
    use SoftDeletes;
    use NodeTrait;
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
        'parent_id',
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

    public function classCategory() {
        return $this->hasOne(ClassCategory::class, 'id', 'school_status_id');
    }

    public function auxiliaryGroup() {
        return $this->hasOne(AuxiliaryGroup::class, 'id', 'auxiliary_group_id');
    }

    // public function status() {
    //     return  $this->hasOne(Status::class, 'id', 'status_id');
    // }

    public function leader() {
        return $this->belongsTo(static::class, 'parent_id', 'id')->select(array('id', 'nick_name'));
    }

    public function cellgroups() {
        return $this->hasMany(static::class, 'parent_id', 'id')->select(array('id', 'first_name', 'last_name', 'middle_name'));
    }

    public function invitedBy() {
        return $this->belongsTo(static::class, 'invited_by', 'id')->select(array('id', 'first_name', 'last_name', 'middle_name'));
    }

    public function network() {
        return $this->hasMany(static::class, 'parent_id', 'id');
    }

    public function withTotalNetwork() {
        return $this->network->reduce(function($count, $network) {
            return $count + $network->count();
        });
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
        $this->hasMany(CellGroup::class, 'id', 'member_id');
    }
    
    public function getFullNameAttribute()
    {
        $initial = substr($this->middle_name, 0, 1);
        return "{$this->first_name} {$initial}. {$this->last_name}";
    }

    public function schoolClass() {
        return $this->belongsTo(SchoolClass::class, 'id', 'member_id');
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

    

    public function scopeWithCellGroup($query, $yearweek = null) 
    {
        if (!$yearweek) $yearweek = date('YW');

        return $query->leftJoin('cell_groups as cga', function($join) use($yearweek){
                $join->on('members.id', '=', 'cga.member_id')
                ->whereRaw('YEARWEEK(`date_attended`, 1) = '. $yearweek);
            })->addSelect([
                    'members.*',
                    'cga.date_attended as date_attended', 
                    'cga.attended', 
                    'cga.id as attendance_id', 
                    \DB::raw('"'. $yearweek .'" as yearweek')
                ]);
    }

    public function scopeByYear($query, $year = null) {
        if (!$year) $year = date('Y');

        return $query->join('cell_groups as cga', function($join) use($year){
                $join->on('members.id', '=', 'cga.member_id')
                ->whereRaw('YEAR(`date_attended`) = '. $year);
            })->addSelect([
                    \DB::raw('DATE_ADD(cga.date_attended, INTERVAL(-WEEKDAY(cga.date_attended)) DAY) as start_date'),
                    \DB::raw('DATE_ADD(cga.date_attended, INTERVAL(1-DAYOFWEEK(cga.date_attended) + 7) DAY) as end_date'),
                    \DB::raw('YEAR(cga.date_attended) as year'),
                    \DB::raw('WEEKOFYEAR(cga.date_attended) as week')
                ])
                ->groupBy(['year', 'week', 'date_attended']);
    }

    public function scopeWithLifeClassStudents($query, $classID) {
        return $query->leftJoin('life_classes as lc', function($join) use($classID) {
            $join->on('members.id', '=', 'lc.member_id')
            ->where('lc.school_class_id',  $classID);
        })->addSelect([
            \DB::raw('IF (lc.member_id is NULL || lc.deleted_at IS NOT NULL, 0, 1) AS is_exist'),
            'members.id'
        ])->orderBy('is_exist', 'DESC');
    }

    public function scopeWithSOLStudents($query, $classID) {
        return $query->leftJoin('sols', function($join) use($classID) {
            $join->on('members.id', '=', 'sols.member_id')
            ->where('school_class_id', $classID);
        })->addSelect([
            \DB::raw('IF (sols.member_id is NULL || sols.deleted_at IS NOT NULL, 0, 1) AS is_exist'),
            'members.id'
        ])->orderBy('is_exist', 'DESC');
    }

    public function scopeWithSUYNLStudents($query, $classID) {
        return $query->leftJoin('suynls', function($join) use($classID) {
            $join->on('members.id', '=', 'suynls.member_id')
            ->where('school_class_id', $classID);
        })->addSelect([
            \DB::raw('IF (suynls.member_id is NULL || suynls.deleted_at IS NOT NULL, 0, 1) AS is_exist'),
            'members.id'
        ])->orderBy('is_exist', 'DESC');
    }
}
