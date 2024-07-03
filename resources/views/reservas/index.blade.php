@extends('layout')

@section('content')
    <h1>Reservas</h1>
    <a href="{{ route('reservas.create') }}" class="btn btn-primary">Crear Reserva</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Laboratorio</th>
                <th>Fecha de Solicitud</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Finalización</th>
                <th>Observaciones</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservas as $reserva)
                <tr>
                    <td>{{ $reserva->id }}</td>
                    <td>{{ $reserva->usuario->nombre }} ({{ $reserva->usuario->tipo_usuario }})</td>
                    <td>{{ $reserva->laboratorio->nombre }} (Capacidad: {{ $reserva->laboratorio->capacidad }})</td>
                    <td>{{ $reserva->fecha_solicitud->format('d/m/Y H:i') }}</td>
                    <td>{{ $reserva->fecha_inicio->format('d/m/Y H:i') }}</td>
                    <td>{{ $reserva->fecha_fin->format('d/m/Y H:i') }}</td>
                    <td>{{ $reserva->observacion }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('reservas.show', $reserva->id) }}" class="btn btn-info btn-sm mx-1">Ver</a>
                            <a href="{{ route('reservas.edit', $reserva->id) }}"
                                class="btn btn-primary btn-sm mx-1">Editar</a>
                            <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm mx-1"
                                    onclick="return confirm('¿Estás seguro de eliminar esta reserva?')">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
