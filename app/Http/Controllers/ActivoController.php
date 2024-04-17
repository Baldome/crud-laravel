<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use Illuminate\Http\Request;

class ActivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activos = Activo::all();
        return view('admin.activos.index', ['activos' => $activos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.activos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo'=> 'required|unique:activos,codigo|max:15',
            'nombre'=> 'required|string|max:255',
            'estado'=> 'required',
            'fecha_registro'=> 'required',
            'categoria_id'=> 'required',
            'ubicacion_id'=> 'required',
        ]);

        $activo = new Activo();
        $activo->codigo = $request->codigo;
        $activo->nombre = $request->nombre;
        $activo->descripcion = $request->descripcion;
        $activo->estado = $request->estado;
        $activo->fecha_registro = $request->fecha_registro;
        $activo->modelo = $request->modelo;
        $activo->serie = $request->serie;
        $activo->imagen = $request->imagen;
        $activo->observaciones = $request->observaciones;
        $activo->categoria_id = $request->categoria_id;
        $activo->ubicacion_id = $request->ubicacion_id;

        $activo->save();

        return redirect()->route('ubicaciones.index')
        ->with('message','Se registró el activo de la manera correcta')
        ->with('icon','success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
