<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'dni',
        'nombre',
        'apellidos',
        'dec_jurada',
        'correo',
        'celular',
        'tipo',
        'fecha_registro',
        'url_dec_jurada',
    ];
}
