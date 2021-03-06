<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $post_request)
    {
        //dd($post_request->file());

        
        if($post_request->hasFile('file') && $post_request->file('file')->isValid()) {
            $filename = uploadFile('file', 'posts'); //se carga con un helper que esta en http helper.php
            //para que funcione ir a composer.json  "files": ["app/Http/helpers.php"]
			$post_request->merge(['imagen' => $filename]);
		}

        //para subir una imagen se crea un helper como un bundle en http/helpers.php



        //pide el user id se crea en el modelo
        Post::create($post_request->input());

        return back()->with('message',['success', __('Post creado Correctamente')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $replies=$post->replies()->with(['author'])->paginate(2);
        //dd($replies);
        return view('posts.detail',compact('post','replies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
