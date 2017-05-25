<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $table = 'grades';

    protected $fillable = [
        'reg_number','unit_id','grade'
    ];

    public function unit(){
        return $this->belongsTo('App\Unit', 'unit_id');
    }
}
