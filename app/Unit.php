<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
        'unit_name','unit_description','lecturer_id','unit_year',
    ];
    public  $timestamps = false;
}
