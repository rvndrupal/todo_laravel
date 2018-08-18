<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name',
    ];

    public function scopeName($query, $name)
    {
        if ($name) {
            return $query->where('name', 'LIKE', "%$name%");
        }
    }


    public function scopeBuscarTag($query, $name)
    {
        if ($name) {
            return $query->where('name', '=', $name);
        }
    }



    public function articles()//Relacion muchos a muchos Un tag puede tener muchos articulos
    {
       // return $this->belongsToMany('App\Article');

       return $this->belongsToMany('App\Article')->withTimestamps();
       //para evitar problemas cuando cargamos muchos a muchos
    
    }
}
