<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::all();
        return view('admin.usuarios.index', ['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|string|unique:users,email',
            'password' => 'required|confirmed',
        ]);

        $usuario = new User();
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->password = $request->password;

        $usuario->save();

        return redirect()->route('usuarios.index')
        ->with('message', 'Se registró al usuario de la manera correcta en la base de datos')
        ->with('icon', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $usuario = User::find($id);
        return view('admin.usuarios.show', ['usuario' => $usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view('admin.usuarios.edit', ['usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|string|unique:users,email',
            'password' => 'required|confirmed',
        ]);

        $usuario = User::find($id);
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->password = $request->password;

        $usuario->save();

        return redirect()->route('usuarios.index')
        ->with('message', 'Se actualizó al usuario de la manera correcta en la base de datos')
        ->with('icon', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::destroy($id);

        return redirect()->route('usuarios.index')
        ->with('message', 'Se eliminó al usuario de la manera correcta de la base de datos')
        ->with('icon', 'success');
    }

    public function registro() {
        return view('auth.registro');
    }
}
