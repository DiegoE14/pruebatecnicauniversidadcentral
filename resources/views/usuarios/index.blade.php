@extends('layout')

@section('content')
    <h1>Usuarios</h1> <!-- Título de la página de usuarios -->
    <a href="{{ route('usuarios.create') }}">Crear Usuario</a> <!-- Enlace para crear un nuevo usuario -->

    <ul>
        @foreach ($usuarios as $usuario)
            <li>
                {{ $usuario->nombre }} ({{ $usuario->tipo_usuario }}) <!-- Nombre y tipo de usuario -->
                <a href="{{ route('usuarios.show', $usuario->id) }}">Ver</a> <!-- Enlace para ver detalles del usuario -->
                <a href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a> <!-- Enlace para editar el usuario -->

                <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline;">
                    @csrf <!-- Token CSRF para protección contra ataques CSRF -->
                    @method('DELETE') <!-- Método HTTP DELETE para eliminar el usuario -->

                    <button type="submit">Eliminar</button> <!-- Botón para enviar el formulario de eliminación -->
                </form>
            </li>
        @endforeach
    </ul>
@endsection
