<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Redirigir después del login.
     */
    public function authenticated(Request $request, $user)
    {
        return redirect('/inicio'); // Aquí decides a dónde irá tras iniciar sesión
    }
}