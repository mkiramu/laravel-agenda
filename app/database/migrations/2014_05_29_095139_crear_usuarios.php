<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearUsuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function($tabla){
			$tabla->increments('id');
			$tabla->string('nombres', 100);
			$tabla->string('apellidos', 100);
			$tabla->string('dni', 8)->unique();
			$tabla->string('password');
			$tabla->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarios');
	}

}
