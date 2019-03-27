<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MemberCategory extends Model
{
    use SoftDeletes;
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
