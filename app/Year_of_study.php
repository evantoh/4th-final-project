<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year_of_study extends Model
{
    protected $table = 'year_study';
    protected $fillable = [
        'year','stroke',
    ];
    public  $timestamps = false;
}
