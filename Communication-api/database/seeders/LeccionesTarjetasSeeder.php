<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LeccionTarjeta;
use App\Models\Leccion;
use App\Models\Tarjeta;

class LeccionesTarjetasSeeder extends Seeder
{
    public function run(): void
    {
        LeccionTarjeta::factory()->count(20)->create();

        $leccion = Leccion::first();
        $tarjeta = Tarjeta::first();

        if ($leccion && $tarjeta) {
            LeccionTarjeta::firstOrCreate([
                'lecciones_id' => $leccion->id,
                'tarjetas_id'  => $tarjeta->id,
            ]);
        }
    }
}
