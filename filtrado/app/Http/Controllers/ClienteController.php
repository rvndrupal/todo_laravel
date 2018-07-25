<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ClienteStoreRequest;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes=Cliente::paginate();

        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteStoreRequest $request)
    {
        $cliente=Cliente::create($request->all());

        if($request->file('file')){ //si se manda el archivo
            $path=Storage::disk('public')->put('image', $request->file('file'));
            //utiliza la funcion de guardar en public crea la carpeta image y pasa el archivo
            $cliente->fill(['file' => asset($path)])->save(); //actualizame la ruta en el post
            //el asset toma toda la ruta y se genera correctamente toda la ruta
        }
        
        return redirect()->route('clientes.index', $cliente->id)
        ->with('info','Cliente guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //dd($cliente->id);
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteStoreRequest $request, Cliente $cliente)
    {
        $cliente->update($request->all());

        if($request->file('file')){ //si se manda el archivo
            $path=Storage::disk('public')->put('image', $request->file('file'));
            //utiliza la funcion de guardar en public crea la carpeta image y pasa el archivo
            $cliente->fill(['file' => asset($path)])->save(); //actualizame la ruta en el post
            //el asset toma toda la ruta y se genera correctamente toda la ruta
        }

        return redirect()->route('clientes.index', $cliente->id)
        ->with('info','Cliente actualizado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return back()->with('info','Eliminado Correctamente');
    }
}
