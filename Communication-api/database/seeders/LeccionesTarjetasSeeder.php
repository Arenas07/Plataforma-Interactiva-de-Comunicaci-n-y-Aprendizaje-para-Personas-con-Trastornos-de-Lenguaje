<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Leccion;
use App\Models\Tarjeta;

class LeccionesTarjetasSeeder extends Seeder
{
    public function run(): void
    {
        $lecciones = Leccion::all();
        $tarjetas  = Tarjeta::all();

        foreach ($lecciones as $leccion) {
            $tarjetasIds = $tarjetas->random(rand(2, 4))->pluck('id')->toArray();

            $leccion->tarjetas()->syncWithoutDetaching($tarjetasIds);
        }
    }
}
