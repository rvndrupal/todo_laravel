<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['forum_id','user_id','title','description'];

    //La inversa de la relación este post tiene un foro
    public function forum()
    {
        return $this->belongsTo(Forum::class, 'forum_id');
    }

    //owner significa que es el autor del post
    public function owner(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
