<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'description',
        'user_id'
    ];


    // Companies -> user_id {FK}
    public function user(){
        return $this->belongsTo('App\User');
    }

    // Projects -> company_id {FK}
    public function project(){
        return $this->hasMany('App\Project');
    }

    public function comments(){
        return $this->morphMany('App\Comment', 'commentable');
    }

}
