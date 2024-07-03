@extends('layout')

@section('content')
    <h1>Crear Laboratorio</h1>

    <!-- Formulario para crear un nuevo laboratorio -->
    <form action="{{ route('laboratorios.store') }}" method="POST">
        @csrf <!-- Directiva de Blade para protección CSRF -->

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
        </div>

        <div>
            <label for="capacidad">Capacidad:</label>
            <input type="number" id="capacidad" name="capacidad">
        </div>

        <button type="submit">Crear</button> <!-- Botón para enviar el formulario -->
    </form>
@endsection
