<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class MetodoComunicacionResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'    => $this->id,
            'nombre'=> $this->nombre,
            'descripcion' => $this->descripcion,
            'tarjetas' => TarjetaResource::collection($this->whenLoaded('tarjetas')),
        ];
    }
}
