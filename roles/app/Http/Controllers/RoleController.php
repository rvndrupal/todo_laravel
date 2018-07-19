<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Caffeinated\Shinobi\Models\role;
use Caffeinated\Shinobi\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles=Role::paginate();

        return view('roles.index', compact('roles'));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=Product::create($request->all());
        
        return redirect()->route('roles.edit', $product->id)
        ->with('info','Producto guardado con exito');
    }
   

    /**
     * Display the specified resource.
     *
     * @param  \App\role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //dd($role->id);

        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(role $role)
    {
        $roles = role::get();  //se descargan todos los roles

        return view('roles.edit', compact('role', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, role $role)
    {
        //primero actualizamos el usuario
        $role->update($request->all());

        //actualizamos los roles
        $role->roles()->sync($request->get('roles'));


        return redirect()->route('roles.edit', $role->id)
        ->with('info','Usuario actualizado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(role $role)
    {
        $role->delete();
        return back()->with('info','Eliminado Correctamente');
    }
}
