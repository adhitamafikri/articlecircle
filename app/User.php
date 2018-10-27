<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // check user role
    // user's article libraries
    public function libraries(){
        return $this->hasMany(Library::class);
    }

    // user's roles
    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    // check user role
    public function is($roleName){
        foreach ($this->roles()->get() as $role) {
            if($role->name == $roleName){
                return true;
            }
        }
        return false;
    }
}
