<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    const PUBLISHED= 1;
    const PENDIG = 2;
    const REJECTED = 3;

    //relacion con categorias
    public function category(){
        return $this->belongsTo(Category::class)->select('id','name');
        //relaciona el curso que categoria tiene y te trai el id y el nombre solamente
    }

    //relacion con la tabla de metas
    public function goals(){
        return $this->hasMany(Goal::class)->select('id','course_id','goal');
        //relaciona el curso con las metas de ese curso muy importante el campo course_id para la relacion
        //muy importante llamar a las claves foraneas en este caso es course_id mirar la base
        //un curso puede tener muchas metas
    }

    public function level(){
        return $this->belongsTo(Level::class)->select('id','name');
    }

    public function reviews(){
        return $this->hasMany(Review::class)->select('id','user_id','course_id','rating','comment','created_at');
    }

    public function requirements(){
        return $this->hasMany(Requeriment::class)->select('id','course_id','requirement');
    }

    public function students(){
        //relacion de los dos modelos
        return $this->belongsToMany(Student::class);  //un curso puede tener muchos estudiantes
        //hacer la relacion en el modelo student
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
}
