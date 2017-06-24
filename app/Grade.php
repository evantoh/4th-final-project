<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model

{
    protected $fillable = [
        'reg_number','unit_id','grade','marks',
    ];

    public $timestamps = false;
}
