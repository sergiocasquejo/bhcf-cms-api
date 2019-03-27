<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class LeadershipLevel extends Model
{
    use SoftDeletes;
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
        return $this->belongsTo('App\Member');
    }
}
