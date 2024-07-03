@extends('layout')

@section('content')
    <h1>Editar Reserva</h1>
    <form action="{{ route('reservas.update', $reserva->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="usuario_id">Usuario:</label>
            <select id="usuario_id" name="usuario_id">
                @foreach ($usuarios as $usuario)
                    <option value="{{ $usuario->id }}" {{ $usuario->id == $reserva->usuario_id ? 'selected' : '' }}>
                        {{ $usuario->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="laboratorio_id">Laboratorio:</label>
            <select id="laboratorio_id" name="laboratorio_id">
                @foreach ($laboratorios as $laboratorio)
                    <option value="{{ $laboratorio->id }}"
                        {{ $laboratorio->id == $reserva->laboratorio_id ? 'selected' : '' }}>{{ $laboratorio->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="fecha_solicitud">Fecha de Solicitud:</label>
            <input type="date" id="fecha_solicitud" name="fecha_solicitud" value="{{ $reserva->fecha_solicitud }}">
        </div>
        <div>
            <label for="fecha_inicio">Fecha de Inicio:</label>
            <input type="datetime-local" id="fecha_inicio" name="fecha_inicio" value="{{ $reserva->fecha_inicio }}">
        </div>
        <div>
            <label for="fecha_fin">Fecha de Fin:</label>
            <input type="datetime-local" id="fecha_fin" name="fecha_fin" value="{{ $reserva->fecha_fin }}">
        </div>
        <div>
            <label for="observaciones">Observaciones:</label>
            <textarea id="observaciones" name="observaciones">{{ $reserva->observaciones }}</textarea>
        </div>
        <button type="submit">Actualizar</button>
    </form>
@endsection
