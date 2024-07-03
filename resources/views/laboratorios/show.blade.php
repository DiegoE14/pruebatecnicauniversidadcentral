@extends('layout')

@section('content')
    <h1>Laboratorio: {{ $laboratorio->nombre }}</h1> <!-- Título del laboratorio -->
    <p>Capacidad: {{ $laboratorio->capacidad }}</p> <!-- Capacidad del laboratorio -->
    <a href="{{ route('laboratorios.index') }}">Volver</a> <!-- Enlace para volver a la lista de laboratorios -->
@endsection
