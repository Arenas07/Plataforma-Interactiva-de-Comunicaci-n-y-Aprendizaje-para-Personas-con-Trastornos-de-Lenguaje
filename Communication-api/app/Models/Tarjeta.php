<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\MetodoComunicacion;
use App\Models\TarjetaTraduccion;
use App\Models\Leccion;

class Tarjeta extends Model
{
    use HasFactory;

    protected $table = 'tarjetas';

    protected $fillable = [
        'uuid', 
        'imagen', 
        'metodo_id'
    ];

    public function metodo()
    {
        return $this->belongsTo(MetodoComunicacion::class, 'metodo_id');
    }

    public function traducciones()
    {
        return $this->hasMany(TarjetaTraduccion::class);
    }

    public function lecciones()
    {
        return $this->belongsToMany(Leccion::class, 'lecciones_tarjetas');
    }
}
