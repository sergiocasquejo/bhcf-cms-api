<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ministry extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ministries';
    protected $fillable = [
        'descriptions', 'name', 'created_by', 'updated_by'
    ];
    
    public function user() {
        $this->belongsTo('App\User');
    }
}
