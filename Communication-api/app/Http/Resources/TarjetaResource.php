<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TarjetaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'    => $this->id,
            'uuid'  => $this->uuid,
            'imagen'=> $this->imagen,
            'metodo'=> $this->metodo?->nombre, 
            'created_at' => $this->created_at->toDateTimeString(),
        ];
    }
}
