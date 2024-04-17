<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/', function () { return view('admin'); });

Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware('auth'); // middleware indica que solo los que esten en la base de datos pueden realizar esta accion
Route::get('/admin/usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])->name('usuarios.index')->middleware('auth');
Route::get('/admin/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'create'])->name('usuarios.create')->middleware('auth');
Route::post('/admin/usuarios', [App\Http\Controllers\UsuarioController::class, 'store'])->name('usuarios.store')->middleware('auth');
Route::get('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'show'])->name('usuarios.show')->middleware('auth');
Route::get('/admin/usuarios/{id}/edit', [App\Http\Controllers\UsuarioController::class, 'edit'])->name('usuarios.edit')->middleware('auth');
Route::put('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'update'])->name('usuarios.update')->middleware('auth');
Route::delete('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'destroy'])->name('usuarios.destroy')->middleware('auth');

// ruta para crear un usuario cuando no existe usuarios
Route::get('/registro', [App\Http\Controllers\UsuarioController::class, 'registro'])->name('usuarios.registro');

// Rutas para las categorias 
Route::get('/admin/categorias', [App\Http\Controllers\CategoriaController::class, 'index'])->name('categorias.index')->middleware('auth'); // Retorna a la lista de categorias
Route::get('/admin/categorias/create', [App\Http\Controllers\CategoriaController::class, 'create'])->name('categorias.create')->middleware('auth'); // Retorna a la lista de categorias
Route::post('/admin/categorias', [App\Http\Controllers\CategoriaController::class, 'store'])->name('categorias.store')->middleware('auth'); // Retorna a la 
Route::get('/admin/categorias/{id}', [App\Http\Controllers\CategoriaController::class, 'show'])->name('categorias.show')->middleware('auth');
Route::get('/admin/categorias/{id}/edit', [App\Http\Controllers\CategoriaController::class, 'edit'])->name('categorias.edit')->middleware('auth');
Route::put('/admin/categorias/{id}', [App\Http\Controllers\CategoriaController::class, 'update'])->name('categorias.update')->middleware('auth');
Route::delete('/admin/categorias/{id}', [App\Http\Controllers\CategoriaController::class, 'destroy'])->name('categorias.destroy')->middleware('auth');

// Rutas para las ubicaciones 
Route::get('/admin/ubicaciones', [App\Http\Controllers\UbicacionController::class, 'index'])->name('ubicaciones.index')->middleware('auth'); // Retorna a la lista de ubicaciones
Route::get('/admin/ubicaciones/create', [App\Http\Controllers\UbicacionController::class, 'create'])->name('ubicaciones.create')->middleware('auth'); // 
Route::post('/admin/ubicaciones', [App\Http\Controllers\UbicacionController::class, 'store'])->name('ubicaciones.store')->middleware('auth'); // Retorna a la 
Route::get('/admin/ubicaciones/{id}', [App\Http\Controllers\UbicacionController::class, 'show'])->name('ubicaciones.show')->middleware('auth');
Route::get('/admin/ubicaciones/{id}/edit', [App\Http\Controllers\UbicacionController::class, 'edit'])->name('ubicaciones.edit')->middleware('auth');
Route::put('/admin/ubicaciones/{id}', [App\Http\Controllers\UbicacionController::class, 'update'])->name('ubicaciones.update')->middleware('auth');
Route::delete('/admin/ubicaciones/{id}', [App\Http\Controllers\UbicacionController::class, 'destroy'])->name('ubicaciones.destroy')->middleware('auth');

// Rutas para los activos 
Route::get('/admin/activos', [App\Http\Controllers\ActivoController::class, 'index'])->name('activos.index')->middleware('auth'); // Retorna a la lista de activos
Route::get('/admin/activos/create', [App\Http\Controllers\ActivoController::class, 'create'])->name('activos.create')->middleware('auth'); // 
Route::post('/admin/activos', [App\Http\Controllers\ActivoController::class, 'store'])->name('activos.store')->middleware('auth'); // Retorna a la 
Route::get('/admin/activos/{id}', [App\Http\Controllers\ActivoController::class, 'show'])->name('activos.show')->middleware('auth');
Route::get('/admin/activos/{id}/edit', [App\Http\Controllers\ActivoController::class, 'edit'])->name('activos.edit')->middleware('auth');
Route::put('/admin/activos/{id}', [App\Http\Controllers\ActivoController::class, 'update'])->name('activos.update')->middleware('auth');
Route::delete('/admin/activos/{id}', [App\Http\Controllers\ActivoController::class, 'destroy'])->name('activos.destroy')->middleware('auth');
