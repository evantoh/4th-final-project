<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{

    protected $fillable = [
        'unit_id', 'grade','student_id'
    ];
}
