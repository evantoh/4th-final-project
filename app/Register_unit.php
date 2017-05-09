<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register_unit extends Model
{
    protected $fillable = [
        'course_title', 'course_description',
    ];
}
