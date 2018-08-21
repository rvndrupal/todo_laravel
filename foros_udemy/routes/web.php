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


/*Route::get('/', function () {
    return view('welcome');
});*/



//password

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ForumsController@index')->name('home.foros');

Route::get('/forums/{forum}', 'ForumsController@show')->name('show.forum');
Route::post('/forums', 'ForumsController@store')->name('store.forum');

Route::get('/posts/{post}', 'PostsController@show')->name('show.post');
