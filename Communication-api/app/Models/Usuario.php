<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Rol;
use App\Models\Progreso;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = "users";
    
    protected $fillable = [
        'nombre', 
        'email', 
        'password', 
        'rol_id'
    ];

    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }

    public function progresos()
    {
        return $this->hasMany(Progreso::class);
    }
}
