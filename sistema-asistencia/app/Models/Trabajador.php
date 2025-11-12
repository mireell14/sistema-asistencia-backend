<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{ protected $fillable = ['dni','nombres', 'apellidos','cargo', 'telefono','direccion'];
    public function tipo_trabajador()
    {
        return $this->belongsTo(Tipo_trabajador::class, 'id_tipo_trabajador');
    }
    //
}
