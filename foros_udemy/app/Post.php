<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\App;

class Post extends Model
{
    protected $fillable=[
        'forum_id','user_id','title','description'
    ];

    //crea los eventos del modelo de eloquent cuando se crea un post como un tigger
    protected static function boot(){
        parent::boot();

        static::creating(function($post){ //al momento de crear un post 
            if( ! App::runningInConsole()){ //si no se ejecuta desde la linea de comando muy fregon
                $post->user_id=auth()->id();// le ponga el id del Usuario que es logueado                
            }
        });
    }


    public function forum(){
        //un post puede tener un foro
        return $this->belongsTo(Forum::class , 'forum_id');
    }

    public function owner(){
        //autor del post
        return $this->belongsTo(User::class, 'user_id');
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

}
