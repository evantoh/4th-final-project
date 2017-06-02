<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer_teach extends Model
{
    protected $table = 'unit_lecturers';

    protected $fillable = [
        'unit_id','lecturer_id',
    ];

    public function unit(){
        return $this->belongsTo('App\Unit', 'unit_id');

    }
    public function Users(){
        return $this->belongsTo('App\User','lecturer_id');
    }

    public $timestamps = false;
}
