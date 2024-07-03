@extends('layout')

@section('content')
    <h1>Usuario: {{ $usuario->nombre }}</h1> <!-- Título con el nombre del usuario -->
    <p>Identificación: {{ $usuario->identificación }}</p> <!-- Muestra la identificación del usuario -->
    <p>Tipo de Usuario: {{ $usuario->tipo_usuario }}</p> <!-- Muestra el tipo de usuario -->
    <p>Dependencia: {{ $usuario->dependencia }}</p> <!-- Muestra la dependencia del usuario -->
    <a href="{{ route('usuarios.index') }}">Volver</a> <!-- Enlace para volver a la lista de usuarios -->
@endsection
