<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    public function course(){
        return $this->belongsTo(Course::class); // siempre es la inversa checar la relacion
    }
}
