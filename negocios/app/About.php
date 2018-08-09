<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'titulo', 'subtitulo','body','l1','l2','l3','l4','l5','file',
    ];


    //Scope   busquedas del  sistema por Query scope
    
    public function scopeTitulo($query, $titulo)
    {
        if ($titulo) {
            return $query->where('titulo', 'LIKE', "%$titulo%");
        }
    }

    public function scopeSubtitulo($query, $subtitulo)
    {
        if ($subtitulo) {
            return $query->where('subtitulo', 'LIKE', "%$subtitulo%");
        }
    }


}
