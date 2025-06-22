<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('clientes', function (Blueprint $table) {
        $table->id();
        $table->string('dni', 8)->unique();
        $table->string('nombre');
        $table->string('apellidos');
        $table->enum('dec_jurada', ['S', 'N']);
        $table->string('correo')->unique();
        $table->string('celular', 15);
        $table->enum('tipo', ['Estudiante', 'Docente', 'Administrativo', 'Externo']);
        $table->date('fecha_registro');
        $table->string('url_dec_jurada');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
