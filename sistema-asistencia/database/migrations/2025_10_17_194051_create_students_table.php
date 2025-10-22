<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            // PK autoincremental con nombre personalizado
            $table->increments('id_estudiante');

            // Campos solicitados
            $table->string('dni', 8)->unique();           // varchar(8)
            $table->string('nombres', 100);               // varchar(100)
            $table->string('apellidos', 100);             // varchar(100)
            $table->date('fecha_nacimiento');             // date
            $table->string('genero', 10);                 // varchar(10)
            $table->string('direccion', 150)->nullable(); // varchar(150)
            $table->string('telefono', 20)->nullable();   // varchar(20)
            $table->string('estado', 20)->default('activo'); // varchar(20)

            // Clave foránea: referencia corregida a grados.id_grado
            $table->unsignedInteger('id_grado');
            $table->foreign('id_grado')
                  ->references('id_grado')
                  ->on('grados')
                  ->cascadeOnUpdate()
                  ->restrictOnDelete();

            // Timestamps
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            // soltar la FK primero para evitar errores en algunos motores
            $table->dropForeign(['id_grado']);
        });

        Schema::dropIfExists('students');
    }
};
