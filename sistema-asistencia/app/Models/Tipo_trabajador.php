<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_trabajador extends Model
{
    protected $table = 'tipo_trabajadores'; // ← corregido
    protected $primaryKey = 'id_tipo';
    protected $fillable = ['nombre_tipo', 'descripcion'];

    // Si tienes un modelo Trabajador, deja esto:
    // public function trabajadores()
    // {
    //     return $this->hasMany(Trabajador::class, 'id_tipo_trabajador');
    // }
}
