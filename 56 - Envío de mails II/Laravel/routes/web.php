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

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
	
    //return view('welcome');
	
	$datos = [
	
		"titulo"=>"Hola alumnos",
		"contenido"=>"Ejemplo de email"
	
	];
	
	Mail::send("emails.test", $datos, function($mensaje){
		
		$mensaje->to("marcvifi10@outlook.es", "Marc")->subject("Prueba de email");
		
	});
	
});
