<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
        'name','slug','body'
    ];  

    public function posts(){ // Una categoria puede tener muchos post
        return $this->hasMany(Post::class);  //una categoria tiene n post
    }
}
