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

Route::get('/admin', function () {
    return view('admin');
});

/*Route::get('/home', function () {
    return view('home.home');
});*/

Route::get('/', function () {
    return redirect('/negocios');
});

Route::get('/negocios', 'FrontController@index');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



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

     //rutas slider
     Route::post('sliders/store', 'SliderController@store')->name('sliders.store')
     ->middleware('permission:sliders.create');
 
     Route::get('sliders', 'SliderController@index')->name('sliders.index')
     ->middleware('permission:sliders.index');
 
     Route::get('sliders/create' , 'SliderController@create')->name('sliders.create')
     ->middleware('permission:sliders.create');
 
     Route::put('sliders/{slider}', 'SliderController@update')->name('sliders.update')
     ->middleware('permission:sliders.edit');
 
     Route::get('sliders/{slider}', 'SliderController@show')->name('sliders.show')
     ->middleware('permission:sliders.show');
 
     Route::delete('sliders/{slider}', 'SliderController@destroy')->name('sliders.destroy')
     ->middleware('permission:sliders.destroy');
 
     Route::get('sliders/{slider}/edit', 'SliderController@edit')->name('sliders.edit')
     ->middleware('permission:sliders.edit');


     //rutas About
     Route::post('abouts/store', 'AboutController@store')->name('abouts.store')
     ->middleware('permission:abouts.create');
 
     Route::get('abouts', 'AboutController@index')->name('abouts.index')
     ->middleware('permission:abouts.index');
 
     Route::get('abouts/create' , 'AboutController@create')->name('abouts.create')
     ->middleware('permission:abouts.create');
 
     Route::put('abouts/{about}', 'AboutController@update')->name('abouts.update')
     ->middleware('permission:abouts.edit');
 
     Route::get('abouts/{about}', 'AboutController@show')->name('abouts.show')
     ->middleware('permission:abouts.show');
 
     Route::delete('abouts/{about}', 'AboutController@destroy')->name('abouts.destroy')
     ->middleware('permission:abouts.destroy');
 
     Route::get('abouts/{about}/edit', 'AboutController@edit')->name('abouts.edit')
     ->middleware('permission:abouts.edit');
 

});