@extends('layout.base')

@section('titulo')
	Listar contactos
@stop

@section('contenido')
	@foreach ($datos as $dato)
		<p>{{$dato}}</p>
	@endforeach
@stop