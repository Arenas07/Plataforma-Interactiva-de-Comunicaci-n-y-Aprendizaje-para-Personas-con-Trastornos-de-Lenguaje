<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Leccion>
 */
class LeccionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(3), // Ej: "Colores básicos"
            'tipo'   => $this->faker->randomElement(['Diaria', 'Refuerzo']),
        ];
    }
}
