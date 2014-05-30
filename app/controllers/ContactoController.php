<?php

class ContactoController extends BaseController {
	
	public function crear_contacto($id_usuario)
	{
		$usuario = User::find($id_usuario);
		$contacto = new Contacto();
		$contacto->nombre = "Contacto1";
		$contacto->telefono = "9876543621";
		$contacto->email = "contacto@contoso.com";
		$contacto->direccion = "direccion contacto";
		$contacto->usuario()->associate($usuario);
 		$contacto->save();
	}

	public function actualizar_contacto($id_usuario, $id_contacto)
	{
		$contacto = Contacto::find($id_contacto);
		$contacto->nombre = "Actualizar contacto 1";
		$contacto->email = "contactoactualizado@contoso.com";
		$contacto->save();
	}

	public function eliminar_contacto($id_usuario, $id_contacto)
	{
		$usuario = User::find($id_usuario);
		$contacto = Contacto::find($id_contacto);
		$contacto->delete();
	}

	public function listar_contactos($id_usuario)
	{
		$usuario = User::find($id_usuario);
		$contactos = $usuario->contacto;
		return View::make('contacto.listar-contactos', array('datos'=>$contactos));
	}
	
	public function detalle_contacto($id_usuario, $id_contacto)
	{
		$contacto = Contacto::find($id_contacto);
		return View::make('contacto.detalle-contacto', array('dato'=>$contacto));
	}

}
