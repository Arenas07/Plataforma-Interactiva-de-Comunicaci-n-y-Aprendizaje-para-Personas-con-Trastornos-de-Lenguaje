<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LeccionResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'    => $this->id,
            'titulo'=> $this->titulo,
            'tipo'  => $this->tipo,
            'tarjetas' => $this->whenLoaded('tarjetas', function () {
                return $this->tarjetas->map(function ($tarjeta) {
                    return [
                        'id'     => $tarjeta->id,
                        'uuid'   => $tarjeta->uuid,
                        'imagen' => $tarjeta->imagen,
                        'metodo' => [
                            'id'     => $tarjeta->metodo->id,
                            'nombre' => $tarjeta->metodo->nombre,
                        ],
                        'traducciones' => $tarjeta->traducciones->map(function ($t) {
                            return [
                                'idioma' => $t->idioma,
                                'frase'  => $t->frase,
                                'audio'  => $t->audio,
                            ];
                        })
                    ];
                });
            }),
        ];
    }
}

