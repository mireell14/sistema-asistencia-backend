<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['dni','nombres', 'apellidos', 'fecha_nacimiento','genero', 'direccion','telefono', 'estado', 'id_seccion'];
    public function grado()
    {
        return $this->belongsTo(Grado::class, 'id_grado');
    }
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;
}
