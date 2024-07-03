@extends('layout')

@section('content')
    <h1>Editar Reserva</h1> <!-- Título de la página de edición de reserva -->
    <form action="{{ route('reservas.update', $reserva->id) }}" method="POST">
        <!-- Formulario para actualizar una reserva -->
        @csrf <!-- Directiva de Blade para incluir el token CSRF -->
        @method('PUT') <!-- Método HTTP para la actualización de datos -->

        <div>
            <label for="usuario_id">Usuario:</label> <!-- Etiqueta para seleccionar el usuario -->
            <select id="usuario_id" name="usuario_id"> <!-- Selección del usuario -->
                @foreach ($usuarios as $usuario)
                    <!-- Iteración sobre la lista de usuarios -->
                    <option value="{{ $usuario->id }}" {{ $usuario->id == $reserva->usuario_id ? 'selected' : '' }}>
                        {{ $usuario->nombre }}</option>
                    <!-- Opción del usuario, marcando como seleccionado si corresponde -->
                @endforeach
            </select>
        </div>

        <div>
            <label for="laboratorio_id">Laboratorio:</label> <!-- Etiqueta para seleccionar el laboratorio -->
            <select id="laboratorio_id" name="laboratorio_id"> <!-- Selección del laboratorio -->
                @foreach ($laboratorios as $laboratorio)
                    <!-- Iteración sobre la lista de laboratorios -->
                    <option value="{{ $laboratorio->id }}"
                        {{ $laboratorio->id == $reserva->laboratorio_id ? 'selected' : '' }}>{{ $laboratorio->nombre }}
                    </option> <!-- Opción del laboratorio, marcando como seleccionado si corresponde -->
                @endforeach
            </select>
        </div>

        <div>
            <label for="fecha_solicitud">Fecha de Solicitud:</label> <!-- Etiqueta para la fecha de solicitud -->
            <input type="date" id="fecha_solicitud" name="fecha_solicitud" value="{{ $reserva->fecha_solicitud }}">
            <!-- Campo de entrada para la fecha de solicitud -->
        </div>

        <div>
            <label for="fecha_inicio">Fecha de Inicio:</label> <!-- Etiqueta para la fecha de inicio -->
            <input type="datetime-local" id="fecha_inicio" name="fecha_inicio" value="{{ $reserva->fecha_inicio }}">
            <!-- Campo de entrada para la fecha y hora de inicio -->
        </div>

        <div>
            <label for="fecha_fin">Fecha de Fin:</label> <!-- Etiqueta para la fecha de fin -->
            <input type="datetime-local" id="fecha_fin" name="fecha_fin" value="{{ $reserva->fecha_fin }}">
            <!-- Campo de entrada para la fecha y hora de fin -->
        </div>

        <div>
            <label for="observaciones">Observaciones:</label> <!-- Etiqueta para las observaciones -->
            <textarea id="observaciones" name="observaciones">{{ $reserva->observaciones }}</textarea> <!-- Área de texto para las observaciones -->
        </div>

        <button type="submit">Actualizar</button> <!-- Botón de enviar el formulario para actualizar la reserva -->
    </form>
@endsection
