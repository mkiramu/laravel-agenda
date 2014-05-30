@extends('layout.base')

@section('titulo')
	Detalle del contacto
@stop

@section('contenido')
	@parent
	{{ $dato->nombre }}
	<br>
	{{ $dato->email }}
@stop