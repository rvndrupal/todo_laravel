<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Reply extends Model
{
    protected $fillable=[
        'user_id','post_id','reply'
    ];

    protected $appends= ['forums'];  //entiendo que es como abrir la instancia para la relación

    //crea los eventos del modelo de eloquent cuando se crea un post como un tigger
    protected static function boot(){
        parent::boot();

        static::creating(function($reply){ //al momento de crear un post 
            if( ! App::runningInConsole()){ //si no se ejecuta desde la linea de comando muy fregon
                $reply->user_id=auth()->id();// le ponga el id del Usuario que es logueado                
            }
        });
    }


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

     //'/images/{path}/{attachment}'
	public function pathImagen() {
		return "../images/replies/" . $this->imagen;
	}





}
