@extends('layout')

@section('content')
    <h1>Reserva</h1> <!-- Título de la página de detalles de la reserva -->
    <p>Usuario: {{ $reserva->usuario->nombre }}</p> <!-- Nombre del usuario asociado a la reserva -->
    <p>Laboratorio: {{ $reserva->laboratorio->nombre }}</p> <!-- Nombre del laboratorio asociado a la reserva -->
    <p>Fecha de Solicitud: {{ $reserva->fecha_solicitud }}</p> <!-- Fecha de solicitud de la reserva -->
    <p>Fecha de Inicio: {{ $reserva->fecha_inicio }}</p> <!-- Fecha de inicio de la reserva -->
    <p>Fecha de Fin: {{ $reserva->fecha_fin }}</p> <!-- Fecha de fin de la reserva -->
    <p>Observaciones: {{ $reserva->observaciones }}</p> <!-- Observaciones de la reserva -->
    <a href="{{ route('reservas.index') }}">Volver</a> <!-- Enlace para volver a la lista de reservas -->
@endsection
