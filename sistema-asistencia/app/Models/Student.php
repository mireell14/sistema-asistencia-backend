<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['nombre', 'apellido', 'direccion', 'telefono', 'estado', 'id_seccion'];
    public function seccion()
    {
        return $this->belongsTo(Seccion::class, 'id_seccion');
    }
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;
}
