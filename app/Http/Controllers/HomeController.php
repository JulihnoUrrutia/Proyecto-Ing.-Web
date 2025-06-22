<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class InicioController extends Controller
{
    public function redirigir()
    {
        return view('welcome'); // cambia a la vista que usas para el trabajador
    }
}