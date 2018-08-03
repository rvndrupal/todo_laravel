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

    //esto esta fregon relación a distancia
    public function replies()
    {
        return $this->hasManyThrough(Reply::class, Post::class);

        //se enlaza la calase Reply por medio de la clase Post muy fregon
        //con esto sabremos el numero de Respuestas de cada Foro.
    }

}
