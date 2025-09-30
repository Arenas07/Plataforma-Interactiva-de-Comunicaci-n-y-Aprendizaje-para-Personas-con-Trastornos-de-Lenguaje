<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Progreso;
use App\Models\Tarjeta;

class Leccion extends Model
{
    use HasFactory;

    protected $table = "lecciones";

    protected $fillable = [
        'titulo', 
        'tipo'
    ];

    public function progresos()
    {
        return $this->hasMany(Progreso::class);
    }

    public function tarjetas()
    {
        return $this->belongsToMany(Tarjeta::class, 'lecciones_tarjetas', 'lecciones_id', 'tarjetas_id');
    }
}
