<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    protected $fillable = ['nombre_seccion', 'capacidad','anio_lectivo'];
    public function grado()
    {
        return $this->belongsTo(Grado::class, 'id_grado');
    }
}
