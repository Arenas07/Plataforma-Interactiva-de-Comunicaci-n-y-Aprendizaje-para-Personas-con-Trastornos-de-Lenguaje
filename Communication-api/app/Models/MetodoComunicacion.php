<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodoComunicacion extends Model
{
    use HasFactory;

    protected $table = 'metodos_comunicacion';

    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'descripcion'
    ];
}
