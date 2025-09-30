<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MetodoComunicacion;

class MetodosComunicacionSeeder extends Seeder
{
    public function run(): void
    {
        // Datos fijos
        $metodos = [
            [
                'nombre' => 'Visual',
                'descripcion' => 'Uso de imagenes para las tarjetas'
            ],
            [
                'nombre' => 'Auditivo',
                'descripcion' => 'Uso de audio en las tarjetas'
            ],
        ];

        foreach ($metodos as $metodo) {
            MetodoComunicacion::create($metodo);
        }

        MetodoComunicacion::factory()->count(2)->create();
    }
}
