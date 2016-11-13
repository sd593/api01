<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //specify which could make visible only
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    //specify which could make hide only
    protected $hidden = [
        'password', 'remember_token',
    ];

    //relationship
    //one meeting can have many usrs
    public function meetings() {
        return $this->belongsToMany('App\Meeting');
    }
}
