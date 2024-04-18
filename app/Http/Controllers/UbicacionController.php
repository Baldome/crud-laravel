<?php

namespace App\Http\Controllers;

use App\Models\Ubicacione;
use Illuminate\Http\Request;

class UbicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ubicaciones = Ubicacione::all();
        return view('admin.ubicaciones.index', ['ubicaciones' => $ubicaciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ubicaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
        ]);

        $ubucacion = new Ubicacione();
        $ubucacion->nombre = $request->nombre;
        $ubucacion->descripcion = $request->descripcion;

        $ubucacion->save();

        return redirect()->route('ubicaciones.index')
        ->with('message', 'Se registró la ubicación de la manera correcta en la base de datos')
        ->with('icon', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $ubicacion = Ubicacione::find($id);
        return view('admin.ubicaciones.show', ['ubicacion'=> $ubicacion]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ubicacion = Ubicacione::findOrFail($id);
        return view('admin.ubicaciones.edit', ['ubicacion'=> $ubicacion]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre'=> 'required|max:255',
            ]);

            $ubicacion = Ubicacione::find($id);
            $ubicacion->nombre = $request->nombre;
            $ubicacion->descripcion = $request->descripcion;

            $ubicacion->save();

            return redirect()->route('ubicaciones.index')
            ->with('message','Se actualizó la ubicacion de la manera correcta en la base de datos')
            ->with('icon','success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Ubicacione::destroy($id);

        return redirect()->route('ubicaciones.index')
        ->with('message','Se eliminó la ubicacion de la manera correcta de la base de datos')
        ->with('icon','succes');
    }
}
