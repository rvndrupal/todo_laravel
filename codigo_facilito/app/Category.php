<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    public function articles() //una categoria puede tener muchos articulos
    {
        return $this->hasMany('App\Article');
    }


}
