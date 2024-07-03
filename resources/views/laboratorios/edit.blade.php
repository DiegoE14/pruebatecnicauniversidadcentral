@extends('layout')

@section('content')
    <h1>Editar Laboratorio</h1>

    <!-- Formulario para editar un laboratorio existente -->
    <form action="{{ route('laboratorios.update', $laboratorio->id) }}" method="POST">
        @csrf <!-- Directiva de Blade para protección CSRF -->
        @method('PUT') <!-- Método HTTP PUT para la actualización -->

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $laboratorio->nombre }}">
        </div>

        <div>
            <label for="capacidad">Capacidad:</label>
            <input type="number" id="capacidad" name="capacidad" value="{{ $laboratorio->capacidad }}">
        </div>

        <button type="submit">Actualizar</button> <!-- Botón para enviar el formulario de actualización -->
    </form>
@endsection
