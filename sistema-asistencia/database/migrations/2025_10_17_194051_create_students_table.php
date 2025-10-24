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

            $table->string('dni', 8)->unique();          
            $table->string('nombres', 100);              
            $table->string('apellidos', 100);             
            $table->date('fecha_nacimiento');            
            $table->string('genero', 10);                 
            $table->string('direccion', 150)->nullable(); 
            $table->string('telefono', 20)->nullable();   
            $table->string('estado', 20)->default('activo'); 
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
           
            $table->dropForeign(['id_grado']);
        });

        Schema::dropIfExists('students');
    }
};
