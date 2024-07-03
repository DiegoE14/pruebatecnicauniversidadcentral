@extends('layout')

@section('content')
    <h1>Crear Laboratorio</h1>
    <form action="{{ route('laboratorios.store') }}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <div>
            <label for="capacidad">Capacidad:</label>
            <input type="number" id="capacidad" name="capacidad">
        </div>
        <button type="submit">Crear</button>
    </form>
@endsection
