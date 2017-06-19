<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_management extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'first_name','last_name','email','id_no','user_type','dob',
    ];
    public  $timestamps = false;
}
