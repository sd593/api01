<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{

    //specify which could make visible only
    protected $fillable = ['time', 'title', 'description'];



    //relationship
    //one meeting can have many usrs
    public function users() {
        return $this->belongsToMany('App\User');
    }
}
