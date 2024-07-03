@extends('layout')

@section('content')
    <h1>Crear Usuario</h1> <!-- Título de la página de creación de usuario -->
    <form action="{{ route('usuarios.store') }}" method="POST"> <!-- Formulario para enviar datos del nuevo usuario -->
        @csrf <!-- Token CSRF para protección contra ataques CSRF -->

        <div>
            <label for="nombre">Nombre:</label> <!-- Etiqueta del campo nombre -->
            <input type="text" id="nombre" name="nombre"> <!-- Campo de entrada para el nombre -->
        </div>

        <div>
            <label for="identificación">Identificación:</label> <!-- Etiqueta del campo identificación -->
            <input type="text" id="identificación" name="identificación"> <!-- Campo de entrada para la identificación -->
        </div>

        <div>
            <label for="tipo_usuario">Tipo de Usuario:</label> <!-- Etiqueta del campo tipo de usuario -->
            <select id="tipo_usuario" name="tipo_usuario"> <!-- Lista desplegable para seleccionar el tipo de usuario -->
                <option value="Estudiante">Estudiante</option> <!-- Opción para tipo de usuario Estudiante -->
                <option value="Docente">Docente</option> <!-- Opción para tipo de usuario Docente -->
                <option value="Administrativo">Administrativo</option> <!-- Opción para tipo de usuario Administrativo -->
            </select>
        </div>

        <div>
            <label for="dependencia">Dependencia:</label> <!-- Etiqueta del campo dependencia -->
            <input type="text" id="dependencia" name="dependencia"> <!-- Campo de entrada para la dependencia -->
        </div>

        <button type="submit">Crear</button> <!-- Botón para enviar el formulario de creación -->
    </form>
@endsection
