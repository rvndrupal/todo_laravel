<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Tag;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use Illuminate\Http\Request;

//para las imagenes
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $posts=Post::orderBy('id','DESC')->paginate(8);
       $posts=Post::orderBy('id','DESC')
       ->where('user_id',auth()->user()->id)//el campo user_id sa igual al id del usuario que esta logueado
       ->paginate(8);

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //pasamos los valores de las categorias y los tags
        $categories=Category::orderBy('name','ASC')->pluck('name','id');//paso solo el nombre y el id
        $tags=Tag::orderBy('name','ASC')->get(); //paso para el arreglo
        return view('posts.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $post=Post::create($request->all());

        if($request->file('file')){ //i se manda el archivo
            $path=Storage::disk('public')->put('image', $request->file('file'));
            //utiliza la funcion de guardar en public crea la carpeta image y pasa el archivo
            $post->fill(['file' => asset($path)])->save(); //actualizame la ruta en el post
            //el asset toma toda la ruta y se genera correctamente toda la ruta
        }
        
        //relacion del post y los tags
        $post->tags()->attach($request->get('tags')); //la magia de muchos a muchos
        //super importante para que se inserte los valores en los dos registros

        return redirect()->route('posts.edit', $post->id)
        ->with('info','Post creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //dd($product->id);
         //validamos con la politica
         $this->authorize('pass',$post);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //validamos con la politica
        $this->authorize('pass',$post);


        //pasamos los valores de las categorias y los tags
        $categories=Category::orderBy('name','ASC')->pluck('name','id');//paso solo el nombre y el id
        $tags=Tag::orderBy('name','ASC')->get(); //paso para el arreglo

        return view('posts.edit', compact('post','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, Post $post)
    {
        
        $post->update($request->all());


        if($request->file('file')){ //si se manda el archivo
            $path=Storage::disk('public')->put('image', $request->file('file'));
            //utiliza la funcion de guardar en public crea la carpeta image y pasa el archivo
            $post->fill(['file' => asset($path)])->save(); //actualizame la ruta en el post
            //el asset toma toda la ruta y se genera correctamente toda la ruta
        }
        
        //relacion del post y los tags ojo con el sync  sincroniza la actualización
        $post->tags()->sync($request->get('tags'));
        //sincroniza y actualiza los valor es de las tablas pivote

        return redirect()->route('posts.edit', $post->id)
        ->with('info','Post Actualizada  con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //validamos con la politica
        $this->authorize('pass',$post);
        $post->delete();
        return back()->with('info','Eliminado Correctamente');
    }
}
