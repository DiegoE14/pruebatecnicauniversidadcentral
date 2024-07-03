@extends('layout')

@section('content')
    <h1>Reserva</h1>
    <p>Usuario: {{ $reserva->usuario->nombre }}</p>
    <p>Laboratorio: {{ $reserva->laboratorio->nombre }}</p>
    <p>Fecha de Solicitud: {{ $reserva->fecha_solicitud }}</p>
    <p>Fecha de Inicio: {{ $reserva->fecha_inicio }}</p>
    <p>Fecha de Fin: {{ $reserva->fecha_fin }}</p>
    <p>Observaciones: {{ $reserva->observaciones }}</p>
    <a href="{{ route('reservas.index') }}">Volver</a>
@endsection
