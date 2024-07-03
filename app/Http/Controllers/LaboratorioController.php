<?php

namespace App\Http\Controllers;

use App\Models\Laboratorio;
use Illuminate\Http\Request;

class LaboratorioController extends Controller
{
    /**
     * Muestra una lista de todos los laboratorios.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $laboratorios = Laboratorio::all();
        return view('laboratorios.index', compact('laboratorios'));
    }

    /**
     * Muestra el formulario para crear un nuevo laboratorio.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('laboratorios.create');
    }

    /**
     * Almacena un nuevo laboratorio en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'capacidad' => 'required|integer'
        ]);

        Laboratorio::create($request->all());
        return redirect()->route('laboratorios.index');
    }

    /**
     * Muestra los detalles de un laboratorio específico.
     *
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\View\View
     */
    public function show(Laboratorio $laboratorio)
    {
        return view('laboratorios.show', compact('laboratorio'));
    }

    /**
     * Muestra el formulario para editar un laboratorio específico.
     *
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\View\View
     */
    public function edit(Laboratorio $laboratorio)
    {
        return view('laboratorios.edit', compact('laboratorio'));
    }

    /**
     * Actualiza un laboratorio específico en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Laboratorio $laboratorio)
    {
        $request->validate([
            'nombre' => 'required',
            'capacidad' => 'required|integer'
        ]);

        $laboratorio->update($request->all());
        return redirect()->route('laboratorios.index');
    }

    /**
     * Elimina un laboratorio específico de la base de datos.
     *
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Laboratorio $laboratorio)
    {
        $laboratorio->delete();
        return redirect()->route('laboratorios.index');
    }
}
