<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Usuario;
use App\Models\Laboratorio;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Muestra una lista de todas las reservas con sus relaciones usuario y laboratorio.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $reservas = Reserva::with('usuario', 'laboratorio')->get();
        return view('reservas.index', compact('reservas'));
    }

    /**
     * Muestra el formulario para crear una nueva reserva,
     * junto con una lista de usuarios y laboratorios disponibles.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $usuarios = Usuario::all();
        $laboratorios = Laboratorio::all();
        return view('reservas.create', compact('usuarios', 'laboratorios'));
    }

    /**
     * Almacena una nueva reserva en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * Muestra los detalles de una reserva específica.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\View\View
     */
    public function show(Reserva $reserva)
    {
        return view('reservas.show', compact('reserva'));
    }

    /**
     * Muestra el formulario para editar una reserva específica,
     * junto con una lista de usuarios y laboratorios disponibles.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\View\View
     */
    public function edit(Reserva $reserva)
    {
        $usuarios = Usuario::all();
        $laboratorios = Laboratorio::all();
        return view('reservas.edit', compact('reserva', 'usuarios', 'laboratorios'));
    }

    /**
     * Actualiza una reserva específica en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * Elimina una reserva específica de la base de datos.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Reserva $reserva)
    {
        $reserva->delete();
        return redirect()->route('reservas.index');
    }
}
