<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Tarjeta;

class TarjetaTraduccion extends Model
{
    use HasFactory;

    protected $table = 'tarjetas_traducciones';
    
    protected $fillable = [
        'tarjeta_id', 
        'idioma', 
        'frase', 
        'audio'
    ];

    public function tarjeta()
    {
        return $this->belongsTo(Tarjeta::class);
    }
}
