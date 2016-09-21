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
    protected $fillable = [
        'fullname','username', 'email', 'password','address', 'phone','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    function role(){

        return $this->belongsTo(Role::class);
    }
}
