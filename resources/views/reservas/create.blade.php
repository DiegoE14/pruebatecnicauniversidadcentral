@extends('layout')

@section('content')
    <h1>Crear Reserva</h1>
    <form action="{{ route('reservas.store') }}" method="POST">
        @csrf
        <div>
            <label for="usuario_id">Usuario:</label>
            <select id="usuario_id" name="usuario_id">
                @foreach ($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="laboratorio_id">Laboratorio:</label>
            <select id="laboratorio_id" name="laboratorio_id">
                @foreach ($laboratorios as $laboratorio)
                    <option value="{{ $laboratorio->id }}">{{ $laboratorio->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="fecha_solicitud">Fecha de Solicitud:</label>
            <input type="date" id="fecha_solicitud" name="fecha_solicitud">
        </div>
        <div>
            <label for="fecha_inicio">Fecha de Inicio:</label>
            <input type="datetime-local" id="fecha_inicio" name="fecha_inicio">
        </div>
        <div>
            <label for="fecha_fin">Fecha de Fin:</label>
            <input type="datetime-local" id="fecha_fin" name="fecha_fin">
        </div>
        <div>
            <label for="observaciones">Observaciones:</label>
            <textarea id="observaciones" name="observaciones"></textarea>
        </div>
        <button type="submit">Crear</button>
    </form>
@endsection
