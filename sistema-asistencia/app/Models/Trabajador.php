<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trabajador extends Model
{
    use HasFactory;

    protected $table = 'trabajadores'; // ← SOLUCIÓN PRINCIPAL

    protected $fillable = [
        'dni',
        'nombres',
        'apellidos',
        'cargo',
        'telefono',
        'direccion',
        'id_tipo'
    ];

    public function tipo_trabajador()
    {
        return $this->belongsTo(TipoTrabajador::class, 'id_tipo'); // ← CORREGIDO
    }
}
