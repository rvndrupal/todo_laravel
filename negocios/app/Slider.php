<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'titulo', 'subtitulo','file',
    ];

     //Scope   busquedas del  sistema por Query scope
    
     public function scopeName($query, $titulo)
     {
         if ($titulo) {
             return $query->where('titulo', 'LIKE', "%$titulo%");
         }
     }
 
     public function scopeAp($query, $subtitulo)
     {
         if ($subtitulo) {
             return $query->where('subtitulo', 'LIKE', "%$subtitulo%");
         }
     }
}//modelo
