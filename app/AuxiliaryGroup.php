<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AuxiliaryGroup extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'auxiliary_groups';
    //Setup fillable columns
    protected $fillable = [
        'descriptions', 'name', 'created_by', 'updated_by'
    ];
    
    public function member() {
        return $this->belongsTo('App\Member');
    }
}
