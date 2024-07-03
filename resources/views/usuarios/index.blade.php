@extends('layout')

@section('content')
    <h1>Usuarios</h1>
    <a href="{{ route('usuarios.create') }}">Crear Usuario</a>
    <ul>
        @foreach ($usuarios as $usuario)
            <li>
                {{ $usuario->nombre }} ({{ $usuario->tipo_usuario }})
                <a href="{{ route('usuarios.show', $usuario->id) }}">Ver</a>
                <a href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>
                <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
