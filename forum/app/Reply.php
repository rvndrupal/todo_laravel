<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable=['user_id','post_id','reply'];

    protected $appends=['forum'];  //se agrega un nuevo atributo que es forum


    public function post()
    {
        return $this->belongsTo(Post::class); //uan respuesta pertenece a n post
    }

    public function author()
    {
        //author no existe por eso le decimos que la clave foranea es user_id
        return $this->belongsTo(User::class , 'user_id');
    }

    public function getForumAttribute() //tiene que empezar con get y finalizar con Attribute
    {
        return $this->post->forum;  //el post tiene un foro con eso le decimos que lo regrese

    }




}
