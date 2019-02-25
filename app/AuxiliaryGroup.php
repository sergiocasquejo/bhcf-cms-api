<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuxiliaryGroup extends Model
{
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
