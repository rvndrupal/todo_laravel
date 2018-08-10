<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceStoreRequest;

class ServiceController extends Controller
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
 
         $services=Service::orderBy('id','ASC')
         ->titulo($titulo)  //titulo viene del sope creado en el modelo que se llama scopeTitulo
         ->paginate(5);

         return view('services.index', compact('services'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceStoreRequest $request)
    {
        $service=Service::create($request->all());

        /*
        if($request->file('file')){ //si se manda el archivo
            $path=Storage::disk('public')->put('image', $request->file('file'));
            //utiliza la funcion de guardar en public crea la carpeta image y pasa el archivo
            $service->fill(['file' => asset($path)])->save(); //actualizame la ruta en el post
            //el asset toma toda la ruta y se genera correctamente toda la ruta
        }*/
        
        return redirect()->route('services.index', $service->id)
        ->with('info','Servicio guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceStoreRequest $request, Service $service)
    {
        $service->update($request->all());

        return redirect()->route('services.index', $service->id)
        ->with('info','Servicio actualizado actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return back()->with('info','Eliminado Correctamente');
    }
}
