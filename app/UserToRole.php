<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserToRole extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    
    protected $table = 'user_to_roles';
    // Disable timestamps
    public $timestamps = false;
}
