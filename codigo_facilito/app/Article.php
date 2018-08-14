<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title','content','user_id','category_id',
    ];

    public function category() //un articulo solo pertenece a una categoria
    {
        return $this->belongsTo('App\Category');
    }

    public function user() //un articulo solo pertenece a un usuario
    {
        return $this->belongsTo('App\User');
    }


    public function images() //un articulo puede tener muchas imagenes
    {
        return $this->hasMany('App\Image');
    }

    public function tags()//Relacion muchos a muchos Un articulo puede tener muchos tags
    {
        return $this->belongsToMany('App\Tag');
    
    }
}
