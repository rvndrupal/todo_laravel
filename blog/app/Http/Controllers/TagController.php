<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Http\Requests\TagStoreRequest;
use App\Http\Requests\TagUpdateRequest;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags=Tag::orderBy('id','DESC')->paginate(8);

        return view('tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagStoreRequest $request)
    {
        $tag=Tag::create($request->all());
        
        return redirect()->route('tags.edit', $tag->id)
        ->with('info','Etiqueta creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //dd($product->id);
        return view('tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        
        return view('tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(TagUpdateRequest $request, Tag $tag)
    {
        $tag->update($request->all());
        return redirect()->route('tags.edit', $tag->id)
        ->with('info','Etiqueta actualizada con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return back()->with('info','Eliminado Correctamente');
    }
}
