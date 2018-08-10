<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'icon', 'titulo','body',
    ];

    public function scopeTitulo($query, $titulo)
    {
        if ($titulo) {
            return $query->where('titulo', 'LIKE', "%$titulo%");
        }
    }
}
