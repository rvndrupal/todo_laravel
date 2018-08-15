<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleStoreRequest;
use App\Category;
Use App\Tag;
use App\Image;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title=$request->get('title');
        $articles=Article::orderBy('id','ASC')
        ->title($title)
        ->paginate(5);

        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories=Category::orderBy('name','ASC')->pluck('name','id');//paso solo el nombre y el id
        //traigo todas las categorias y pasas el valor del id
        $tags=Tag::orderBy('name','ASC')->pluck('name','id');


        return view('articles.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleStoreRequest $request)
    {
       
        //dd($request->tags); muestra todos los tags que recibes
        
        if($request->file('image')){ //si se manda el archivo
            $file=$request->file('image');
            $name='articulo_'. time().'.'.$file->getClientOriginalExtension();//se crea una imagen individual por tiempo
            $path=public_path().'/images/articles'; //te manda a la carpeta public y crea una nueva acrpeta
            $file->move($path,$name);
        }

        $article=new Article($request->all());
        //se necesita el id del Cliente      
        $article->user_id= \Auth::user()->id;  //te da el id del usuario actual
        $article->save();

        $article->tags()->sync($request->tags); //guarda el articulo y los tags en la tabla pivote super importante
        

        $image=new Image(); //se inicia el modelo imagen para guardar en la tabla imagen
        $image->name=$name;
        $image->article()->associate($article); //asocia la imagen al articulo muy importante
        $image->save();

        return redirect()->route('articles.index', $article->id)
        ->with('info','Artiículo guardado con exito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $cliente=Cliente::create($request->all());

        if($request->file('file')){ //si se manda el archivo
            $path=Storage::disk('public')->put('image', $request->file('file'));
            //utiliza la funcion de guardar en public crea la carpeta image y pasa el archivo
            $cliente->fill(['file' => asset($path)])->save(); //actualizame la ruta en el post
            //el asset toma toda la ruta y se genera correctamente toda la ruta
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
