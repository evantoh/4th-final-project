<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model

{
    protected $fillable = [
        'reg_number','unit_name','grade',
    ];

    public $timestamps = false;
}
