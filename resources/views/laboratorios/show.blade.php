@extends('layout')

@section('content')
    <h1>Laboratorio: {{ $laboratorio->nombre }}</h1>
    <p>Capacidad: {{ $laboratorio->capacidad }}</p>
    <a href="{{ route('laboratorios.index') }}">Volver</a>
@endsection
