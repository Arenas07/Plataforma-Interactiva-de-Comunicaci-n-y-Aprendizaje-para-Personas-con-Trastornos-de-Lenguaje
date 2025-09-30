<?php

namespace Database\Factories;

use App\Models\Leccion;
use App\Models\Tarjeta;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeccionTarjetaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'lecciones_id' => Leccion::inRandomOrder()->first()?->id ?? Leccion::factory(),
            'tarjetas_id'  => Tarjeta::inRandomOrder()->first()?->id ?? Tarjeta::factory(),
        ];
    }
}
