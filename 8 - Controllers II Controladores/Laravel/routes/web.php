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

Route::get('/home', function () {
    return view('welcome');
	
	//return "Hola";
});

Route::get('/sobre', function(){
	
	return "Sobre";
	
});

Route::get('/contacto', function(){
	
	return "Contacto";
	
});

Route::get('/foro', function(){
	
	return "Foro";
	
});

Route::get('/post/{id}/{nombre}', function($id, $nombre){
	
	return "Este es el ".$nombre.", nº".$id;
	
})->where('nombre','[a-zA-Z]+');

Route::get('/inicio','Ejemplo3Controller@index');