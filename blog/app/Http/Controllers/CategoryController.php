<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::orderBy('id','DESC')->paginate(8);

        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
        $category=Category::create($request->all());
        
        return redirect()->route('categories.edit', $category->id)
        ->with('info','Categoria creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //dd($product->id);
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(TagUpdateRequest $request, Category $category)
    {
        $tag->update($request->all());
        return redirect()->route('categories.edit', $category->id)
        ->with('info','Categoria Actualizada actualizada con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('info','Eliminado Correctamente');
    }
}
