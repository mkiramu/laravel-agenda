@extends('layout.base')

@section('titulo')
	Detalle del usuario
@stop

@section('contenido')
	@parent
	{{ $dato->nombres }}
	<br>
	{{ $dato->apellidos }}
@stop