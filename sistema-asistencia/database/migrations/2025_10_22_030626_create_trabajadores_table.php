<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            // Clave primaria autoincremental
            $table->increments('id_trabajador');

            // Atributos principales
            $table->string('dni', 8)->unique();           // Documento nacional
            $table->string('nombres', 100);               // Nombres del trabajador
            $table->string('apellidos', 100);             // Apellidos del trabajador
            $table->string('cargo', 50);                  // Cargo o puesto
            $table->string('telefono', 20)->nullable();   // Teléfono o celular
            $table->string('direccion', 150)->nullable(); // Dirección

            // Relación con tabla tipo_trabajadores
            $table->unsignedInteger('id_tipo');
            $table->foreign('id_tipo')
                  ->references('id_tipo')
                  ->on('tipo_trabajadores')
                  ->cascadeOnUpdate()
                  ->restrictOnDelete();

            // Campos automáticos
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::table('trabajadores', function (Blueprint $table) {
            $table->dropForeign(['id_tipo']);
        });

        Schema::dropIfExists('trabajadores');
    }
};
