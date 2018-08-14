<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name',
    ];

    public function articles()//Relacion muchos a muchos Un tag puede tener muchos articulos
    {
       // return $this->belongsToMany('App\Article');

       return $this->belongsToMany('App\Article')->withTimestamps();
       //para evitar problemas cuando cargamos muchos a muchos
    
    }
}
