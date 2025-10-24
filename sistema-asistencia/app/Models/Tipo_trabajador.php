<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_trabajador extends Model
{ 
    protected $fillable = ['nombre_tipo_trabajador', 'descripcion'];
    public function trabajadores()
    {
        return $this->hasMany(Trabajador::class, 'id_tipo_trabajador');
    }

    //
}
