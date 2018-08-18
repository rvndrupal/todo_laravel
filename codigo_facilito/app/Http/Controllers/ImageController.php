<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use App\Article;

use App\Category;
use App\Tag;


class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $articles=Article::orderBy('id','DES')->paginate(6);

        $articles->each(function($articles){
            $articles->category;  //nomres de las relaciones
            $articles->images;
            $articles->tags;
        });

        //dd($articles);
       

        return view('images.index',compact('articles'));
        
    }

    public function buscarCat($name){
        
        $categorie=Category::BuscarCat($name)->first();  //busqued por medio del scop creado en el modelo
        //traigo una categoria

        $articles=$categorie->articles()->paginate(6);   //creo la relacion 
        $articles->each(function($articles){
            $articles->category;  //nombres de las relaciones
            $articles->images;
        });

        return view('images.index',compact('articles'));

        //dd($articles);

        //dd($categorie);

    }

    public function buscarTag($name){
        
        $tag=Tag::BuscarTag($name)->first();  //busqued por medio del scop creado en el modelo
        //traigo una categoria

        //dd($tag);

        $articles=$tag->articles()->paginate(6);   //creo la relacion 
        $articles->each(function($articles){
            $articles->category;  //nombres de las relaciones
            $articles->images;
        });

        return view('images.index',compact('articles'));

        //dd($articles);

        //dd($categorie);

    }


}
