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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Se crean las rutas del sistema
//MUY IMPORTANTE AGREGAR EL MIDDLAWERE AL ARCHIVO kERNEL.PHP

//blog de la imagenes
Route::get('blog/imagenes', 'ImageController@index')->name('blog.index');

Route::get('categorie_detalle/{name}','ImageController@buscarCat')->name('detalle.category');

Route::get('tag_detalle/{name}','ImageController@buscarTag')->name('detalle.tag');





//permisos y roles

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

     //rutas articulos
     Route::post('articles/store', 'ArticleController@store')->name('articles.store')
     ->middleware('permission:articles.create');
 
     Route::get('articles', 'ArticleController@index')->name('articles.index')
     ->middleware('permission:articles.index');
 
     Route::get('articles/create' , 'ArticleController@create')->name('articles.create')
     ->middleware('permission:articles.create');
 
     Route::put('articles/{article}', 'ArticleController@update')->name('articles.update')
     ->middleware('permission:articles.edit');
 
     Route::get('articles/{article}', 'ArticleController@show')->name('articles.show')
     ->middleware('permission:articles.show');
 
     Route::delete('articles/{article}', 'ArticleController@destroy')->name('articles.destroy')
     ->middleware('permission:articles.destroy');
 
     Route::get('articles/{article}/edit', 'ArticleController@edit')->name('articles.edit')
     ->middleware('permission:articles.edit');


      //rutas Imagenes
      /*
      Route::post('images/store', 'ImageController@store')->name('images.store')
      ->middleware('permission:images.create');
  
      Route::get('images', 'ImageController@index')->name('images.index')
      ->middleware('permission:images.index');
  
      Route::get('images/create' , 'ImageController@create')->name('images.create')
      ->middleware('permission:images.create');
  
      Route::put('images/{image}', 'ImageController@update')->name('images.update')
      ->middleware('permission:images.edit');
  
      Route::get('images/{image}', 'ImageController@show')->name('images.show')
      ->middleware('permission:images.show');
  
      Route::delete('images/{image}', 'ImageController@destroy')->name('images.destroy')
      ->middleware('permission:images.destroy');
  
      Route::get('images/{image}/edit', 'ImageController@edit')->name('images.edit')
      ->middleware('permission:images.edit');
 
    */
    


     //rutas tag
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

});