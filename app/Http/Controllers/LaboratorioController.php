<?php

namespace App\Http\Controllers;

use App\Models\Laboratorio;
use Illuminate\Http\Request;

class LaboratorioController extends Controller
{
    public function index()
    {
        $laboratorios = Laboratorio::all();
        return view('laboratorios.index', compact('laboratorios'));
    }

    public function create()
    {
        return view('laboratorios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'capacidad' => 'required|integer'
        ]);

        Laboratorio::create($request->all());
        return redirect()->route('laboratorios.index');
    }

    public function show(Laboratorio $laboratorio)
    {
        return view('laboratorios.show', compact('laboratorio'));
    }

    public function edit(Laboratorio $laboratorio)
    {
        return view('laboratorios.edit', compact('laboratorio'));
    }

    public function update(Request $request, Laboratorio $laboratorio)
    {
        $request->validate([
            'nombre' => 'required',
            'capacidad' => 'required|integer'
        ]);

        $laboratorio->update($request->all());
        return redirect()->route('laboratorios.index');
    }

    public function destroy(Laboratorio $laboratorio)
    {
        $laboratorio->delete();
        return redirect()->route('laboratorios.index');
    }
}
