<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable=[
        'user_id','post_id','reply'
    ];

    protected $appends= ['forums'];  //entiendo que es como abrir la instancia para la relación


    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id'); //para que sepa que campo tiene la relacion
    }


    public function getForumAttribute()
    {
        //regla tiene que empezar por get terminar Atribute y tiene que ser camelkase
        return $this->post->forum;
        //la magia esta en el forum checar model foro
    }




}
