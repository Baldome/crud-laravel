<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\User;
use App\Models\Ubicacione;
use App\Models\Activo;

class AdminController extends Controller
{
    //
    public function index() {
        $users = User::all();
        $categorys = Categoria::all();
        $ubicacions = Ubicacione::all();
        return view('admin.index',['users' => $users, 'categorys' => $categorys, 'ubicacions' => $ubicacions]);

    }
}
