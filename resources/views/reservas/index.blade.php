@extends('layout')

@section('content')
    <h1>Reservas</h1> <!-- Título de la página de reservas -->
    <a href="{{ route('reservas.create') }}" class="btn btn-primary">Crear Reserva</a>
    <!-- Botón para crear una nueva reserva -->
    <table class="table table-striped mt-3"> <!-- Tabla para mostrar las reservas -->
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
                <!-- Iteración sobre la lista de reservas -->
                <tr>
                    <td>{{ $reserva->id }}</td> <!-- ID de la reserva -->
                    <td>{{ $reserva->usuario->nombre }} ({{ $reserva->usuario->tipo_usuario }})</td>
                    <!-- Nombre y tipo de usuario de la reserva -->
                    <td>{{ $reserva->laboratorio->nombre }} (Capacidad: {{ $reserva->laboratorio->capacidad }})</td>
                    <!-- Nombre y capacidad del laboratorio de la reserva -->
                    <td>{{ $reserva->fecha_solicitud->format('d/m/Y H:i') }}</td> <!-- Fecha de solicitud formateada -->
                    <td>{{ $reserva->fecha_inicio->format('d/m/Y H:i') }}</td> <!-- Fecha de inicio formateada -->
                    <td>{{ $reserva->fecha_fin->format('d/m/Y H:i') }}</td> <!-- Fecha de fin formateada -->
                    <td>{{ $reserva->observaciones }}</td> <!-- Observaciones de la reserva -->
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('reservas.show', $reserva->id) }}" class="btn btn-info btn-sm mx-1">Ver</a>
                            <!-- Botón para ver detalles de la reserva -->
                            <a href="{{ route('reservas.edit', $reserva->id) }}"
                                class="btn btn-primary btn-sm mx-1">Editar</a> <!-- Botón para editar la reserva -->
                            <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm mx-1"
                                    onclick="return confirm('¿Estás seguro de eliminar esta reserva?')">Eliminar</button>
                                <!-- Botón para eliminar la reserva -->
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
