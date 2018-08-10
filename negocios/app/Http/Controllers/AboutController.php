<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AboutStoreRequest;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         //para los filtros de busqueda
         $titulo=$request->get('titulo');
         $sub=$request->get('subtitulo');
 
         $abouts=About::orderBy('id','ASC')
         ->titulo($titulo)  //titulo viene del sope creado en el modelo que se llama scopeTitulo
         ->subtitulo($sub) //lo mismo
         ->paginate(5);

         return view('abouts.index', compact('abouts'));     
 
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutStoreRequest $request)
    {
        $about=About::create($request->all());

        if($request->file('file')){ //si se manda el archivo
            $path=Storage::disk('public')->put('about', $request->file('file'));
            //utiliza la funcion de guardar en public crea la carpeta image y pasa el archivo
            $about->fill(['file' => asset($path)])->save(); //actualizame la ruta en el post
            //el asset toma toda la ruta y se genera correctamente toda la ruta
        }
        
        return redirect()->route('abouts.index', $about->id)
        ->with('info','Nosotros guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        return view('abouts.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('abouts.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(AboutStoreRequest $request, About $about)
    {
        $about->update($request->all());

        if($request->file('file')){ //si se manda el archivo
            $path=Storage::disk('public')->put('about', $request->file('file'));
            //utiliza la funcion de guardar en public crea la carpeta image y pasa el archivo
            $about->fill(['file' => asset($path)])->save(); //actualizame la ruta en el post
            //el asset toma toda la ruta y se genera correctamente toda la ruta
        }

        return redirect()->route('abouts.index', $about->id)
        ->with('info','Nosotros actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();
        return back()->with('info','Eliminado Correctamente');
    }
}
