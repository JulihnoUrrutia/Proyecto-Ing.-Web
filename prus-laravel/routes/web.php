<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ServicioController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware(['auth'])->group(function () {
        Route::get('/registro', [UsuarioController::class, 'opciones'])->name('registro.opciones');
        Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
    });
});
/*
Route::get('/registro/opciones', [RegistroController::class, 'opciones'])
    ->middleware(['auth'])
    ->name('registro.opciones');
*/
// Ruta para el formulario de registrar usuario (cliente del FabLab)
Route::get('/usuarios/crear', [UsuarioController::class, 'create'])
    ->middleware(['auth'])
    ->name('usuarios.create');

// Ruta para el formulario de registrar servicio
Route::get('/servicios/crear', [ServicioController::class, 'create'])
    ->middleware(['auth'])
    ->name('servicios.create');


Route::get('/clientes/listar', [UsuarioController::class, 'listar'])->name('clientes.listar');


require __DIR__ . '/auth.php';
