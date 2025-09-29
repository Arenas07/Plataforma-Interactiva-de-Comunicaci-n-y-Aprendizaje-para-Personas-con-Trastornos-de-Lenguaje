<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecciones extends Model
{
    use HasFactory;

    protected $table = 'lecciones';

    public $timestamps = true;

    protected $fillable = [
        'titulo',
        'tipo'
    ];

    public function Progreso()
    {
        return $this->belongsTo(progreso::class);
    }


    public function Tarjetas()
    {
        return $this->belongsTo(progreso::class);
    }
}
