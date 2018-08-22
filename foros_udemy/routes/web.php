<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


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

Route::post('/posts', 'PostsController@store')->name('store.post');

Route::post('/riplies', 'RepliesController@store')->name('store.reply');


//ruta imagenes
Route::get('/images/{path}/{imagen}', function($path, $imagen) {
	$storagePath = Storage::disk($path)->getDriver()->getAdapter()->getPathPrefix();
	$imageFilePath = $storagePath . $imagen;

	if(File::exists($imageFilePath)) {
		return Image::make($imageFilePath)->response();
	}
});
