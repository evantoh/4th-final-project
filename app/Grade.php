<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model

{
    protected $fillable = [
        'reg_number','unit_id','grade','marks',
    ];

    public $timestamps = false;

    public function unit(){
        return $this->belongsTo('App\Unit', 'unit_id');
    }

    public function comment(){
        return $this->hasOne('App\Comment', 'grade_id');
    }
}
