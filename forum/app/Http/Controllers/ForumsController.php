<?php

namespace App\Http\Controllers;

use App\Forum;
use Illuminate\Http\Request;

class ForumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $forums=Forum::latest()->paginate(3); valido pero hace muchas consultas
       $forums=Forum::with(['replies','posts'])->paginate(2);

        //dd($forums);
        return view('forums.index',compact('forums'));
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
    public function store(Request $request)
    {
       //dd(request()->all());
       //Validar los Formularios
       $this->validate(request(),[
            'name' => 'required|max:30|unique:forums',
            'description' => 'required|max:300'
       ]);

      Forum::create(request()->all()); //con esto guarda en el forum
       return back()->with('info',['success', __("Foro creado correctamente")]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show(Forum $forum)
    {
        //dd($forum);
        $posts=$forum->posts()->with(['owner'])->paginate(4);  
        //muestra la relacion del forum cuantos post tiene por autor y los pagina de 2 en 2
        return view('forums.show',compact('posts', 'forum'));

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit(Forum $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forum $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forum)
    {
        //
    }
}
