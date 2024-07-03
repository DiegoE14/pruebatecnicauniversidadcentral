<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Usuario;
use App\Models\Laboratorio;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
        $reservas = Reserva::with('usuario', 'laboratorio')->get();
        return view('reservas.index', compact('reservas'));
    }

    public function create()
    {
        $usuarios = Usuario::all();
        $laboratorios = Laboratorio::all();
        return view('reservas.create', compact('usuarios', 'laboratorios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'laboratorio_id' => 'required|exists:laboratorios,id',
            'fecha_solicitud' => 'required|date',
            'fecha_inicio' => 'required|date|after_or_equal:fecha_solicitud',
            'fecha_fin' => 'required|date|after:fecha_inicio',
            'observaciones' => 'nullable|string'
        ]);

        Reserva::create($request->all());
        return redirect()->route('reservas.index');
    }

    public function show(Reserva $reserva)
    {
        return view('reservas.show', compact('reserva'));
    }

    public function edit(Reserva $reserva)
    {
        $usuarios = Usuario::all();
        $laboratorios = Laboratorio::all();
        return view('reservas.edit', compact('reserva', 'usuarios', 'laboratorios'));
    }

    public function update(Request $request, Reserva $reserva)
    {
        $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'laboratorio_id' => 'required|exists:laboratorios,id',
            'fecha_solicitud' => 'required|date',
            'fecha_inicio' => 'required|date|after_or_equal:fecha_solicitud',
            'fecha_fin' => 'required|date|after:fecha_inicio',
            'observaciones' => 'nullable|string'
        ]);

        $reserva->update($request->all());
        return redirect()->route('reservas.index');
    }

    public function destroy(Reserva $reserva)
    {
        $reserva->delete();
        return redirect()->route('reservas.index');
    }
}
