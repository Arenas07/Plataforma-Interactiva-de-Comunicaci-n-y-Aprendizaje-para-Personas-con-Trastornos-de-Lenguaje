<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TraduccionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'idioma' => $this->idioma,
            'texto' => $this->texto,
            'tarjeta_id' => $this->tarjeta_id,
        ];
    }
}
