<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index() {
        $users = User::all();
        $categorys = Categoria::all();
        return view('admin.index',['users' => $users, 'categorys' => $categorys]);

       // return view('admin.index',['categorys' => $categorys]);
    }
}
