<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Usuario;
use App\Models\Leccion;

class Progreso extends Model
{
    use HasFactory;

    protected $table = 'progreso';
    
    protected $fillable = [
        'usuario_id', 
        'leccion_id', 
        'tarjetas_usadas', 
        'completadas', 
        'fecha'
    ];


    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function leccion()
    {
        return $this->belongsTo(Leccion::class);
    }
}
