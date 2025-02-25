<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Countrie extends Model
{
    public function posts(){
        return $this->hasManyThrough(Post::class,User::class,"countrie_id",'user_id','id','id');
    }
    public function users(){
        return $this->hasMany(User::class);
    }
}
