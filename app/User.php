<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name', 
        'email', 
        'password',
        'first_name',
        'middle_name',
        'last_name',
        'city',
        'role_id'
    ];
    

    
    protected $hidden = [
        'password', 'remember_token',
    ];
    

    // user'ın role bilgisini users tablosunda tutuyoruz.
    // roles tablosunda sadece id ve name tutulmakta.
    public function role(){
        return $this->belongsTo('App\Role');
    }

    // Companies -> user_id {FK}
    // Users     -> id {PK}
    public function companies(){
        return $this->hasMany('App\Company');
    }

    public function tasks(){
        return $this->belongsToMany('App\Task');
    }

    // many to many relationship
    public function projects(){
        return $this->belongsToMany('App\Project');
    }

    public function comments(){
        return $this->morphMany('App\Comment', 'commentable');
    }
    
}
