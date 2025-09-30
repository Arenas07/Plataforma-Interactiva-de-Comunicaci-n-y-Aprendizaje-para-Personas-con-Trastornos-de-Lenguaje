<?php

namespace Database\Factories;

use App\Models\Progreso;
use App\Models\Usuario;
use App\Models\Leccion;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgresoFactory extends Factory
{
    protected $model = Progreso::class;

    public function definition()
    {
        return [
            'usuario_id' => Usuario::factory(),
            'leccion_id' => Leccion::factory(),
            'tarjetas_usadas' => $this->faker->numberBetween(5, 20),
            'completadas' => $this->faker->numberBetween(0, 20),
            'fecha' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
