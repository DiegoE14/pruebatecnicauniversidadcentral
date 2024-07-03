@extends('layout')

@section('content')
    <h1>Usuario: {{ $usuario->nombre }}</h1>
    <p>Identificación: {{ $usuario->identificación }}</p>
    <p>Tipo de Usuario: {{ $usuario->tipo_usuario }}</p>
    <p>Dependencia: {{ $usuario->dependencia }}</p>
    <a href="{{ route('usuarios.index') }}">Volver</a>
@endsection
