<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Forum extends Model
{
    protected $fillable=[
        'name','description','slug',
    ];

    //le decimos que la clave id sea el slug
    public function getRouteKeyName()
    {
        return 'slug';
    }

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
