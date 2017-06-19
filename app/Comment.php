<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
       'user_id','comment','grade_id'
    ];

    public $timestamps = false;
    public function Users()
    {
        return $this->belongsTo('App\User','lecturer_id');
    }
}
