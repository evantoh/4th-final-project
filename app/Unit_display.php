<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit_display extends Model
{
    protected $fillable = [ 'id','unit_name', 'unit_description','lecturer_id',
    ];
protected $table = 'units';
    public  $timestamps = false;
}
