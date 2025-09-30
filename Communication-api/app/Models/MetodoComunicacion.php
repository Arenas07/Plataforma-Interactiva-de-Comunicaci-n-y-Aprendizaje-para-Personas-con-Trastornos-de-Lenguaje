<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Tarjeta;

class MetodoComunicacion extends Model
{
    use HasFactory;

    protected $table = 'metodos_comunicacion';

    protected $fillable = [
        'nombre', 
        'descripcion'
    ];


    public function tarjetas()
    {
        return $this->hasMany(Tarjeta::class, 'metodo_id');
    }
}
