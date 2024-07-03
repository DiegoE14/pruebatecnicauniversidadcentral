@extends('layout')

@section('content')
    <h1>Crear Usuario</h1>
    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <div>
            <label for="identificación">Identificación:</label>
            <input type="text" id="identificación" name="identificación">
        </div>
        <div>
            <label for="tipo_usuario">Tipo de Usuario:</label>
            <select id="tipo_usuario" name="tipo_usuario">
                <option value="Estudiante">Estudiante</option>
                <option value="Docente">Docente</option>
                <option value="Administrativo">Administrativo</option>
            </select>
        </div>
        <div>
            <label for="dependencia">Dependencia:</label>
            <input type="text" id="dependencia" name="dependencia">
        </div>
        <button type="submit">Crear</button>
    </form>
@endsection
