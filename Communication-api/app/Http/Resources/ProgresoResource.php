<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProgresoResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'usuario' => [
                'id' => $this->usuario->id,
                'nombre' => $this->usuario->nombre,
                'email' => $this->usuario->email,
            ],
            'leccion' => [
                'id' => $this->leccion->id,
                'titulo' => $this->leccion->titulo,
                'tipo' => $this->leccion->tipo,
            ],
            'tarjetas_usadas' => $this->tarjetas_usadas,
            'completadas' => $this->completadas,
            'fecha' => $this->fecha,
            'created_at' => $this->created_at?->toDateTimeString(),
            'updated_at' => $this->updated_at?->toDateTimeString(),
        ];
    }
}
