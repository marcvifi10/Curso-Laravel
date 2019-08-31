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

Route::get('/',"MiControlador@index");
Route::get('/crear',"MiControlador@create");
Route::get('/articulos',"MiControlador@store");
Route::get('/mostrar',"MiControlador@show");
Route::get('/contacto',"MiControlador@contactar");
Route::get('/galeria',"MiControlador@galeria");

/*Route::get('/insertar',function()
{
	
	DB::insert("INSERT INTO articulos(Nombre_Articulo,Precio,Pais_Origen,Observaciones)
	VALUES(?,?,?,?)",["jarron",15,"JAPON","ganga"]);
	
});

Route::get('/leer',function()
{
	
	$resultados = DB::select("SELECT * FROM articulos WHERE id=?",[1]);
	
	foreach($resultados as $articulo)
	{
		
		return $articulo->Nombre_Articulo;
		
	}
	
});

Route::get('/actualiza',function()
{
	
	$resultados = DB::update("UPDATE articulos SET Nombre_Articulo='cccc' WHERE ID=?",[1]);
	
});

Route::get('/borrar',function()
{
	
	$resultados = DB::update("DELETE FROM articulos WHERE id=?",[1]);
	
});*/

Route::get("/leer2", function()
{
	
	/*$articulos = Articulo::all();
	
	foreach($articulos as $articulo)
	{
		
		echo $articulo->Nombre_Articulo;
		
	}*/
	
	$articulos = Articulo::where("Pais_Origen","ESP")->get();
	
	//$articulos = Articulo::where("Pais_Origen","ESP")->max("PRECIO");
	
	return $articulos;
	
});

Route::get("/insertar", function()
{
	
	$articulos = new Articulo;
	$articulos->Nombre_Articulo = "Pantalones";	
	$articulos->Precio = 11;
	$articulos->Pais_Origen = "Pantalones Observacion";
	
	$articulos->save();
	
});