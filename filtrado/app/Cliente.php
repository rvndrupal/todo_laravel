<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'name', 'ap','file',
    ];


    //Scope   busquedas del  sistema por Query scope
    
    public function scopeName($query, $name)
    {
        if ($name) {
            return $query->where('name', 'LIKE', "%$name%");
        }
    }

    public function scopeAp($query, $ap)
    {
        if ($ap) {
            return $query->where('ap', 'LIKE', "%$ap%");
        }
    }
    
   

}//modelo