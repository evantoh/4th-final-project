<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer_unit extends Model
{  protected $table = 'unit_lecturers';

    protected $fillable = [
        'unit_id','lecturer_id',
    ];

    public $timestamps = false;
}
