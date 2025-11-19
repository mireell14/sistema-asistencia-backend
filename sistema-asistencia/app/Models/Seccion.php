<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    use HasFactory;
    protected $table = 'secciones';
    protected $fillable = ['nombre_seccion', 'capacidad','anio_lectivo'];
    public function grado()
    {
        return $this->belongsTo(Grado::class, 'id_grado');
    }
}
