<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    protected $fillable = ['nombre_grado', 'nivel'];
    public function secciones()
    {
        return $this->hasMany(Seccion::class);
    }
}
