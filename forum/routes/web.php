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
Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','ForumsController@index')->name('home');
Route::get('/forums/{forum}','ForumsController@show');
Route::post('/forums', 'ForumsController@store')->name('store');

//post
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');
