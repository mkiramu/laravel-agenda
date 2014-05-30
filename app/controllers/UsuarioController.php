<?php

class UsuarioController extends BaseController {
	
	public function crear_usuario()
	{
		$usuario = new User;
		$usuario->nombres = "Usuario1";
		$usuario->apellidos = "Apellido1";
		$usuario->dni = "987654";
		$usuario->password = "mipassword";
		$usuario->save();
	}

	public function actualizar_usuario($id_usuario)
	{
		$usuario = User::find($id_usuario);
		$usuario->nombres = "Usuario Actualizado n_n";
		$usuario->apellidos = "Apellido Actualizado n_n";
		$usuario->save();
	}
	
	public function detalle_usuario($id_usuario)
	{
		$usuario = User::find($id_usuario);
		return View::make('usuario.detalle-usuario', array('dato'=>$usuario));
	}

}
