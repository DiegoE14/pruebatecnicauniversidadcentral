@extends('layout')

@section('content')
    <h1>Laboratorios</h1>

    <!-- Enlace para crear un nuevo laboratorio -->
    <a href="{{ route('laboratorios.create') }}" class="btn btn-primary">Crear Laboratorio</a>

    <ul>
        @foreach ($laboratorios as $laboratorio)
            <li>
                {{ $laboratorio->nombre }} (Capacidad: {{ $laboratorio->capacidad }})

                <!-- Acciones para cada laboratorio -->
                <div class="actions">
                    <a href="{{ route('laboratorios.show', $laboratorio->id) }}">Ver</a>
                    <!-- Enlace para ver detalles del laboratorio -->
                    <a href="{{ route('laboratorios.edit', $laboratorio->id) }}">Editar</a>
                    <!-- Enlace para editar el laboratorio -->

                    <!-- Formulario para eliminar el laboratorio -->
                    <form action="{{ route('laboratorios.destroy', $laboratorio->id) }}" method="POST"
                        style="display:inline;">
                        @csrf <!-- Directiva de Blade para protección CSRF -->
                        @method('DELETE') <!-- Método HTTP DELETE para eliminar -->

                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        <!-- Botón para enviar el formulario de eliminación -->
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
