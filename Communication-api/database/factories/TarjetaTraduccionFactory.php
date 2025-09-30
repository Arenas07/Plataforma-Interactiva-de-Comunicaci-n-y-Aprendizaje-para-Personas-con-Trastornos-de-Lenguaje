<?php

namespace Database\Factories;

use App\Models\TarjetaTraduccion;
use App\Models\Tarjeta;
use Illuminate\Database\Eloquent\Factories\Factory;

class TarjetaTraduccionFactory extends Factory
{
    protected $model = TarjetaTraduccion::class;

    public function definition()
    {
        return [
            'tarjeta_id' => Tarjeta::factory(), // genera una tarjeta si no existe
            'idioma'     => $this->faker->randomElement(['es', 'en']),
            'frase'      => $this->faker->sentence(3),
            'audio'      => 'audios/' . $this->faker->uuid . '.mp3',
        ];
    }
}
