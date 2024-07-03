@extends('layout')

@section('content')
    <h1>Laboratorios</h1>
    <a href="{{ route('laboratorios.create') }}" class="btn btn-primary">Crear Laboratorio</a>
    <ul>
        @foreach ($laboratorios as $laboratorio)
            <li>
                {{ $laboratorio->nombre }} (Capacidad: {{ $laboratorio->capacidad }})
                <div class="actions">
                    <a href="{{ route('laboratorios.show', $laboratorio->id) }}">Ver</a>
                    <a href="{{ route('laboratorios.edit', $laboratorio->id) }}">Editar</a>
                    <form action="{{ route('laboratorios.destroy', $laboratorio->id) }}" method="POST"
                        style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
