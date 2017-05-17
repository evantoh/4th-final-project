<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentunit extends Model
{
    protected $table = 'student_units';

    public $timestamps = false;

    protected $fillable = [
        'student_id','unit_id',
    ];
}