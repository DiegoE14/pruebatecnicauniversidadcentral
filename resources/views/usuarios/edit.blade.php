@extends('layout')

@section('content')
    <h1>Editar Usuario</h1>
    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $usuario->nombre }}">
        </div>
        <div>
            <label for="identificación">Identificación:</label>
            <input type="text" id="identificación" name="identificación" value="{{ $usuario->identificación }}">
        </div>
        <div>
            <label for="tipo_usuario">Tipo de Usuario:</label>
            <select id="tipo_usuario" name="tipo_usuario">
                <option value="Estudiante" {{ $usuario->tipo_usuario == 'Estudiante' ? 'selected' : '' }}>Estudiante
                </option>
                <option value="Docente" {{ $usuario->tipo_usuario == 'Docente' ? 'selected' : '' }}>Docente</option>
                <option value="Administrativo" {{ $usuario->tipo_usuario == 'Administrativo' ? 'selected' : '' }}>
                    Administrativo</option>
            </select>
        </div>
        <div>
            <label for="dependencia">Dependencia:</label>
            <input type="text" id="dependencia" name="dependencia" value="{{ $usuario->dependencia }}">
        </div>
        <button type="submit">Actualizar</button>
    </form>
@endsection
