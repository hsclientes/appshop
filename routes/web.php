<?php
//Route::post('/','TestController');

Route::get('/', 'TextController@welcome');

    //return "hola desde web.php"


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}', 'ProductController@show');

Route::post('/cart', 'CartDetailController@store');
Route::delete('/cart', 'CartDetailController@destroy');

Route::post('/order', 'CartController@update');

Route::middleware(['auth','admin'])->prefix('admin')->namespace('Admin')->group(function () {
	//***********************//
	Route::get('/products', 'ProductController@index'); // listado
	Route::get('/products/create', 'ProductController@create'); // formulario
	Route::post('/products', 'ProductController@store'); // registrar
	Route::get('/products/{id}/edit', 'ProductController@edit'); // edicion
	Route::post('/products/{id}/edit', 'ProductController@update'); // actualizar
	Route::post('/products/{id}/delete', 'ProductController@destroy'); // eliminar  

	Route::get('/products/{id}/images', 'ImageController@index'); // subir imagenes
	Route::post('/products/{id}/images', 'ImageController@store'); // subir imagenes
	Route::delete('/products/{id}/images', 'ImageController@destroy'); // subir imagenes

	Route::get('/products/{id}/images/select/{image}', 'ImageController@select'); // destacar una imagen


});

