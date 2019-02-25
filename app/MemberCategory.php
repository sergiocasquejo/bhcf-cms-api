<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'member_categories';
    //Create fillable columns
    protected $fillable = [
        'descriptions', 'name', 'created_by', 'updated_by'
    ];
}
