<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeadershipLevel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'leadership_levels';
    protected $fillable = [
        'descriptions', 'name', 'created_by', 'updated_by'
    ];
    
    public function member() {
        $this->belongsTo('App\Member');
    }
}
