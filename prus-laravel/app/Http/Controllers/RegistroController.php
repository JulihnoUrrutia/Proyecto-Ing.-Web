<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function opciones()
    {
        return view('registro.opciones'); // vista de selección
    }
}
