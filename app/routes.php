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


Route::get('crear-usuario', function(){
	return "URL crear-usuario";
});


Route::get('actualizar-usuario/{id_usuario}', function($id_usuario){
	return "URL actualizar-usuario: ".$id_usuario;
});


Route::get('detalle-usuario/{id_usuario}', function($id_usuario){
	return "URL detalle-usuario: ".$id_usuario;
});


Route::get('usuario/{id_usuario}/crear-contacto', function($id_usuario){
	// return "URL crear-contacto: ".$id_usuario;
	return Redirect::to('usuario/1/listar-contactos');
});


Route::get('usuario/{id_usuario}/actualizar-contacto/{id_contacto}', function($id_usuario, $id_contacto){
	return "URL actualizar-contacto ".$id_usuario." ".$id_contacto;
});


Route::get('usuario/{id_usuario}/eliminar-contacto/{id_contacto}', function($id_usuario, $id_contacto){
	return "URL eliminar-contacto ".$id_usuario." ".$id_contacto;
});


Route::get('usuario/{id_usuario}/listar-contactos/{id_contacto}', function($id_usuario, $id_contacto){
	return "URL listar-contactos ".$id_usuario." ".$id_contacto;
});


Route::get('usuario/{id_usuario}/detalle-contacto/{$id_contacto}', function($id_usuario, $id_contacto){
	return "URL detalle-contacto ".$id_usuario." ".$id_contacto;
});


