<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MetodoComunicacionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->randomElement([
                'Visual',
                'Auditivo',
            ]),
            'descripcion' => $this->faker->sentence(8),
        ];
    }
}
