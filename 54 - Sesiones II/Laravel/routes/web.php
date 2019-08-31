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
	
	/*if(Auth::check())
	{
		
		return "Estás logeado!!!";
		
	}
	else
	{
		
		return "No estás logeado!!!";
		
	}*/
	
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/user/roles', ['middleware'=>'role', function()
{
	
	return "Middleware role";
	
}]);

Route::get('/admin', 'AdministradorController@index');
