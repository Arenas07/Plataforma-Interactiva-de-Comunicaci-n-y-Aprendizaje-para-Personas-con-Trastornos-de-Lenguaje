<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Leccion;
use App\Models\Tarjeta;


class LeccionTarjeta extends Model
{
    use HasFactory;

    protected $table = 'lecciones_tarjetas';

    protected $fillable = [
        'leccion_id', 
        'tarjeta_id'
    ];


    public function leccion()
    {
        return $this->belongsTo(Leccion::class);
    }

    public function tarjeta()
    {
        return $this->belongsTo(Tarjeta::class);
    }
}
