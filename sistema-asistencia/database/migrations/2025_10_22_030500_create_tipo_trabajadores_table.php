<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tipo_trabajadores', function (Blueprint $table) {
            // Clave primaria autoincremental
            $table->increments('id_tipo');

            // Atributos principales
            $table->string('nombre_tipo', 50);      // Ejemplo: "Administrativo", "Docente", "Técnico"
            $table->string('descripcion', 100);     // Breve descripción del tipo de trabajador

            // Campos automáticos
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tipo_trabajadores');
    }
};
