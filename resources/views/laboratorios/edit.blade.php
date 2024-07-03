@extends('layout')

@section('content')
    <h1>Editar Laboratorio</h1>
    <form action="{{ route('laboratorios.update', $laboratorio->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $laboratorio->nombre }}">
        </div>
        <div>
            <label for="capacidad">Capacidad:</label>
            <input type="number" id="capacidad" name="capacidad" value="{{ $laboratorio->capacidad }}">
        </div>
        <button type="submit">Actualizar</button>
    </form>
@endsection
