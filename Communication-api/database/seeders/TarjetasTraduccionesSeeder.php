<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tarjeta;
use App\Models\TarjetaTraduccion;

class TarjetasTraduccionesSeeder extends Seeder
{
    public function run(): void
    {
        // Crear traducciones aleatorias para cada tarjeta existente
        Tarjeta::all()->each(function ($tarjeta) {
            TarjetaTraduccion::factory()->create([
                'tarjeta_id' => $tarjeta->id,
            ]);
        });

        $tarjeta = Tarjeta::first();
        if ($tarjeta) {
            TarjetaTraduccion::updateOrCreate(
                ['tarjeta_id' => $tarjeta->id],
                [
                    'idioma' => 'es',
                    'frase'  => 'Hola, ¿cómo estás?',
                    'audio'  => 'audios/hola.mp3',
                ]
            );
        }
    }
}
