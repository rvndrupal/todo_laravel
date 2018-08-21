<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $fillable=[
        'name','description'
    ];

    public function posts(){
        //un foro puede tener muchos post
        return $this->hasMany(Post::class);
    }

    public function replies()
    {
        //se puede enlazar a distancia  la clase respuestas con la clase post
        return $this->hasManyThrough(Reply::class, Post::class);
    }
}
