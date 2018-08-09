<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'titulo', 'subtitulo','body','l1','l2','l3','l4','l5','file',
    ];
}
