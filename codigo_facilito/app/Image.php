<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'name','article_id',
    ];

    public function article() //una imagen solo pertenece a un articulo
    {
        return $this->belongsTo('App\Article');
    }
}
