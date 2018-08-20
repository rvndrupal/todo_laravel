<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'forum_id','user_id','title','description'
    ];


    public function forum(){
        //un post puede tener un foro
        return $this->belongsTo(Forum::class , 'forum_id');
    }

    public function owner(){
        //autor del post
        return $this->belongsTo(User::class, 'user_id');
    }

}
