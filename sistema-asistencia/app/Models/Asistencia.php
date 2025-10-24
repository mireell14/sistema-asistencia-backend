<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{ 
    protected $fillable = ['id_estudiante', 'fecha', 'hora_entrada', 'hora_salida', 'estado', 'observacion'];
    public function asistencias()
    {
        return $this->belongsTo(Student::class, 'id_estudiante');
    }
    //
}
