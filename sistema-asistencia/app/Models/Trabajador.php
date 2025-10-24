<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{ protected $fillable = ['nombre', 'apellido', 'direccion', 'telefono', 'estado', 'id_tipo_trabajador'];
    public function tipo_trabajador()
    {
        return $this->belongsTo(Tipo_trabajador::class, 'id_tipo_trabajador');
    }
    //
}
