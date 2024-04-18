<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use App\Models\Categoria;
use App\Models\Ubicacione;
use Illuminate\Http\Request;

class ActivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activos = Activo::with('categoria', 'ubicacion')->get();
        $categorias = Categoria::all();
        $ubicaciones = Ubicacione::all();
        return view('admin.activos.index', ['activos' => $activos, 'categorias' => $categorias, 'ubicaciones' => $ubicaciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        $ubicaciones = Ubicacione::all();
        return view('admin.activos.create', ['categorias' => $categorias, 'ubicaciones' => $ubicaciones]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|unique:activos,codigo|max:15',
            'nombre' => 'required|string|max:255',
            'estado' => 'required',
            'fecha_ingreso' => 'required',
            'categoria_id' => 'required',
            'ubicacion_id' => 'required',
        ]);

        try {
            $activo = new Activo();
            $activo->codigo = $request->codigo;
            $activo->nombre = $request->nombre;
            $activo->descripcion = $request->descripcion;
            $activo->estado = $request->estado;
            $activo->fecha_ingreso = $request->fecha_ingreso;
            $activo->modelo = $request->modelo;
            $activo->serie = $request->serie;
            $activo->imagen = $request->imagen;
            $activo->observaciones = $request->observaciones;
            $activo->categoria_id = $request->categoria_id;
            $activo->ubicacion_id = $request->ubicacion_id;
            $activo->save();

            return redirect()->route('activos.index')
                ->with('message', 'Se registró el activo de la manera correcta')
                ->with('icon', 'success');
        } catch (\Exception $e) {
            // Maneja el error aquí, por ejemplo, logeando el error o mostrando un mensaje de error al usuario
            return redirect()->back()
                ->with('message', 'Ocurrió un error al registrar el activo')
                ->with('icon', 'error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $activo = Activo::find($id);
        return view('admin.activos.show', ['activo' => $activo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $activo = Activo::findOrFail($id);
        return view('admin.activos.edit', ['activo' => $activo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'codigo' => 'required|unique:activos,codigo|max:15',
            'nombre' => 'required|string|max:255',
            'estado' => 'required',
            'fecha_registro' => 'required',
            'categoria_id' => 'required',
            'ubicacion_id' => 'required',
        ]);

        $activo = Activo::find($id);
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

        return redirect()->route('activos.index')
            ->with('message', 'Se actualizó el activo de la manera correcta')
            ->with('icon', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Activo::destroy($id);

        return redirect()->route('activos.index')
            ->with('message', 'Se eliminó el activo de la manera correcta')
            ->with('icon', 'success');
    }
}
