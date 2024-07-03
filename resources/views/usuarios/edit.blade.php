@extends('layout')

@section('content')
    <h1>Editar Usuario</h1> <!-- Título de la página de edición de usuario -->
    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        <!-- Formulario para enviar datos actualizados del usuario -->
        @csrf <!-- Token CSRF para protección contra ataques CSRF -->
        @method('PUT') <!-- Método HTTP PUT para enviar datos de actualización -->

        <div>
            <label for="nombre">Nombre:</label> <!-- Etiqueta del campo nombre -->
            <input type="text" id="nombre" name="nombre" value="{{ $usuario->nombre }}">
            <!-- Campo de entrada para el nombre, con valor predefinido del usuario -->
        </div>

        <div>
            <label for="identificación">Identificación:</label> <!-- Etiqueta del campo identificación -->
            <input type="text" id="identificación" name="identificación" value="{{ $usuario->identificación }}">
            <!-- Campo de entrada para la identificación, con valor predefinido del usuario -->
        </div>

        <div>
            <label for="tipo_usuario">Tipo de Usuario:</label> <!-- Etiqueta del campo tipo de usuario -->
            <select id="tipo_usuario" name="tipo_usuario"> <!-- Lista desplegable para seleccionar el tipo de usuario -->
                <option value="Estudiante" {{ $usuario->tipo_usuario == 'Estudiante' ? 'selected' : '' }}>Estudiante
                </option>
                <!-- Opción para tipo de usuario Estudiante, seleccionada si coincide con el tipo de usuario actual del usuario -->
                <option value="Docente" {{ $usuario->tipo_usuario == 'Docente' ? 'selected' : '' }}>Docente</option>
                <!-- Opción para tipo de usuario Docente, seleccionada si coincide con el tipo de usuario actual del usuario -->
                <option value="Administrativo" {{ $usuario->tipo_usuario == 'Administrativo' ? 'selected' : '' }}>
                    Administrativo</option>
                <!-- Opción para tipo de usuario Administrativo, seleccionada si coincide con el tipo de usuario actual del usuario -->
            </select>
        </div>

        <div>
            <label for="dependencia">Dependencia:</label> <!-- Etiqueta del campo dependencia -->
            <input type="text" id="dependencia" name="dependencia" value="{{ $usuario->dependencia }}">
            <!-- Campo de entrada para la dependencia, con valor predefinido del usuario -->
        </div>

        <button type="submit">Actualizar</button> <!-- Botón para enviar el formulario de actualización -->
    </form>
@endsection
