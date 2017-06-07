<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
       'lecturer_id','comment','grade_id'
    ];

    public $timestamps = false;
}
