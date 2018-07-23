<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable=[
        'user_id','category_id','name','slug','excerpt','body','status','file'
    ];

    //un post pertenece a un usuario 
    public function user(){
        return $this->belongsTo(User::class); //una etiqueta pertenece a un usuario
    }

    //un post pertenece a una categoria
    public function category(){
        return $this->belongsTo(Category::class); //una etiqueta pertenece a un usuario
    }

    public function tags(){ // se manda a llamar en el seeder de post en la relacion
        return $this->belongsToMany(Tag::class);  //pertenece y tiene muchas etiquetas
    }
}
