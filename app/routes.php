<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('crear-usuario', "UsuarioController@crear_usuario");
Route::get('actualizar-usuario/{id_usuario}', "UsuarioController@actualizar_usuario");
Route::get('detalle-usuario/{id_usuario}', "UsuarioController@detalle_usuario");

Route::get('usuario/{id_usuario}/crear-contacto', "ContactoController@crear_contacto");
Route::get('usuario/{id_usuario}/actualizar-contacto/{id_contacto}', "ContactoController@actualizar_contacto");
Route::get('usuario/{id_usuario}/eliminar-contacto/{id_contacto}', "ContactoController@eliminar_contacto");
Route::get('usuario/{id_usuario}/listar-contactos', "ContactoController@listar_contactos");
Route::get('usuario/{id_usuario}/detalle-contacto/{id_contacto}', "ContactoController@detalle_contacto");


