<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'id', 'first_name','last_name','email','id_no','user_type','dob',
    ];
}
