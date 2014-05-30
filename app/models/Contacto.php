<?php

class Contacto extends Eloquent {

	// public $timestamp = false;

	public function usuario() {
		return $this->belongsTo('User');
	}

}
