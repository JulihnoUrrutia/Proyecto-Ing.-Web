<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Validator;

class UsuarioController extends Controller
{
    public function opciones()
    {
        $clientes = Cliente::all();
        return view('registro.opciones', compact('clientes'));
    }

    public function store(Request $request)
    {
        // Validar los datos
        $validator = Validator::make($request->all(), [
            'dni' => 'required|string|size:8|unique:clientes,dni',
            'nombre' => 'required|string|max:100',
            'apellidos' => 'required|string|max:100',
            'dec_jurada' => 'required|in:S,N',
            'correo' => 'required|email|unique:clientes,correo',
            'celular' => 'required|string|max:15',
            'tipo' => 'required|in:Estudiante,Docente,Administrativo,Externo',
            'fecha_registro' => 'required|date',
            'url_dec_jurada' => 'required|url|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Crear nuevo cliente
        Cliente::create($request->all());

        return redirect()->back()->with('success', 'Usuario registrado correctamente.');
    }

    public function listar()
    {
        $clientes = \App\Models\Cliente::all(); // Asegúrate de importar el modelo

        return response()->json($clientes);
    }
}
