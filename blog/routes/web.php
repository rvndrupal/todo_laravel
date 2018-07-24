<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get//('/', function () {
    return view('welcome');
//});
*/

Route::redirect('/','blog');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Ruta del blog
Route::get('blog','Web\PageController@blog')->name('blog');

//leer más
Route::get('blog/{slug}','Web\PageController@post')->name('post');
//para las categorias
Route::get('categoria/{slug}','Web\PageController@category')->name('category');
//tag
Route::get('etiqueta/{slug}','Web\PageController@tag')->name('tag');







//Se crean las rutas del sistema
//MUY IMPORTANTE AGREGAR EL MIDDLAWERE AL ARCHIVO kERNEL.PHP

Route::middleware(['auth'])->group(function(){

    //rutas roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
    ->middleware('permission:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
    ->middleware('permission:roles.index');

    Route::get('roles/create' , 'RoleController@create')->name('roles.create')
    ->middleware('permission:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
    ->middleware('permission:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
    ->middleware('permission:roles.show');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
    ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
    ->middleware('permission:roles.edit');


    //rutas productos
    Route::post('products/store', 'ProductController@store')->name('products.store')
    ->middleware('permission:products.create');

    Route::get('products', 'ProductController@index')->name('products.index')
    ->middleware('permission:products.index');

    Route::get('products/create' , 'ProductController@create')->name('products.create')
    ->middleware('permission:products.create');

    Route::put('products/{product}', 'ProductController@update')->name('products.update')
    ->middleware('permission:products.edit');

    Route::get('products/{product}', 'ProductController@show')->name('products.show')
    ->middleware('permission:products.show');

    Route::delete('products/{product}', 'ProductController@destroy')->name('products.destroy')
    ->middleware('permission:products.destroy');

    Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit')
    ->middleware('permission:products.edit');


     //rutas clientes
     Route::post('clientes/store', 'ClienteController@store')->name('clientes.store')
     ->middleware('permission:clientes.create');
 
     Route::get('clientes', 'ClienteController@index')->name('clientes.index')
     ->middleware('permission:clientes.index');
 
     Route::get('clientes/create' , 'ClienteController@create')->name('clientes.create')
     ->middleware('permission:clientes.create');
 
     Route::put('clientes/{cliente}', 'ClienteController@update')->name('clientes.update')
     ->middleware('permission:clientes.edit');
 
     Route::get('clientes/{cliente}', 'ClienteController@show')->name('clientes.show')
     ->middleware('permission:clientes.show');
 
     Route::delete('clientes/{cliente}', 'ClienteController@destroy')->name('clientes.destroy')
     ->middleware('permission:clientes.destroy');
 
     Route::get('clientes/{cliente}/edit', 'ClienteController@edit')->name('clientes.edit')
     ->middleware('permission:clientes.edit');


     //rutas tags
     Route::post('tags/store', 'TagController@store')->name('tags.store')
     ->middleware('permission:tags.create');
 
     Route::get('tags', 'TagController@index')->name('tags.index')
     ->middleware('permission:tags.index');
 
     Route::get('tags/create' , 'TagController@create')->name('tags.create')
     ->middleware('permission:tags.create');
 
     Route::put('tags/{tag}', 'TagController@update')->name('tags.update')
     ->middleware('permission:tags.edit');
 
     Route::get('tags/{tag}', 'TagController@show')->name('tags.show')
     ->middleware('permission:tags.show');
 
     Route::delete('tags/{tag}', 'TagController@destroy')->name('tags.destroy')
     ->middleware('permission:tags.destroy');
 
     Route::get('tags/{tag}/edit', 'TagController@edit')->name('tags.edit')
     ->middleware('permission:tags.edit');
       //rutas tags

     //rutas categorias
     Route::post('categories/store', 'CategoryController@store')->name('categories.store')
     ->middleware('permission:categories.create');
 
     Route::get('categories', 'CategoryController@index')->name('categories.index')
     ->middleware('permission:categories.index');
 
     Route::get('categories/create' , 'CategoryController@create')->name('categories.create')
     ->middleware('permission:categories.create');
 
     Route::put('categories/{category}', 'CategoryController@update')->name('categories.update')
     ->middleware('permission:categories.edit');
 
     Route::get('categories/{category}', 'CategoryController@show')->name('categories.show')
     ->middleware('permission:categories.show');
 
     Route::delete('categories/{category}', 'CategoryController@destroy')->name('categories.destroy')
     ->middleware('permission:categories.destroy');
 
     Route::get('categories/{category}/edit', 'CategoryController@edit')->name('categories.edit')
     ->middleware('permission:categories.edit');
       //rutas categorias

    //rutas post
    Route::post('posts/store', 'PostController@store')->name('posts.store')
    ->middleware('permission:posts.create');

    Route::get('posts', 'PostController@index')->name('posts.index')
    ->middleware('permission:posts.index');

    Route::get('posts/create' , 'PostController@create')->name('posts.create')
    ->middleware('permission:posts.create');

    Route::put('posts/{post}', 'PostController@update')->name('posts.update')
    ->middleware('permission:posts.edit');

    Route::get('posts/{post}', 'PostController@show')->name('posts.show')
    ->middleware('permission:posts.show');

    Route::delete('posts/{post}', 'PostController@destroy')->name('posts.destroy')
    ->middleware('permission:posts.destroy');

    Route::get('posts/{post}/edit', 'PostController@edit')->name('posts.edit')
    ->middleware('permission:posts.edit');
      //rutas post


    //rutas usuarios    

    Route::get('users', 'UserController@index')->name('users.index')
    ->middleware('permission:users.index');   

    Route::put('users/{user}', 'UserController@update')->name('users.update')
    ->middleware('permission:users.edit');

    Route::get('users/{user}', 'UserController@show')->name('users.show')
    ->middleware('permission:users.show');

    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
    ->middleware('permission:users.destroy');

    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
    ->middleware('permission:users.edit');

});