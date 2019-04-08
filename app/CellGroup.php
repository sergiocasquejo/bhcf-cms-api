<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CellGroup extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    
    protected $table = 'cell_group';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'member_id',
        'date_attended',
        'attended',
        'created_by',
        'updated_by'
    ];

    public function member() {
        return $this->belongsTo('App\Member');
    }

}
