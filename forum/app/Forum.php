<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    //Comienzan las relaciones
    protected $fillable=['name','description'];

    //Un foro tienen muchos post
    public function posts()
    {
        return $this->hasMany(Post::class); //un foro tiene muchos post
    }

}
