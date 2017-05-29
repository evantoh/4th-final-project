<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Display_all_units extends Model
{
    protected $table = 'units';
    protected $fillable = [
        'unit_name','unit_description',];
    public $timestamps = false;
}
