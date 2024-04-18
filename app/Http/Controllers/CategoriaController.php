<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('admin.categorias.index', ['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     */                              
    public function create()
    {
        return view('admin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;

        $categoria->save();

        return redirect()->route('categorias.index')
            ->with('message', 'Se registró la categoria de la manera correcta')
            ->with('icon', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categoria = Categoria::find($id);
        return view('admin.categorias.show', ['categoria' => $categoria]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('admin.categorias.edit', ['categoria' => $categoria]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
        ]);

        $categoria = Categoria::find($id);
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;

        $categoria->save();

        return redirect()->route('categorias.index')
            ->with('message', 'Se actualizó la categoria de la manera correcta')
            ->with('icon', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Categoria::destroy($id);

        return redirect()->route('categorias.index')
        ->with('message', 'Se eliminó la categoría de la manera correcta')
        ->with('icon', 'success');
    }
}
