<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable=[
        'name','slug'
    ];  

    public function posts(){ // Una categoria puede tener muchos post
        return $this->belongsToMany(Post::class);  //pertenece y tiene muchos Post
    }
}
