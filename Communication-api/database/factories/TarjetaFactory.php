<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tarjeta;
use App\Models\MetodoComunicacion;

class TarjetaFactory extends Factory
{
    protected $model = Tarjeta::class;

    public function definition(): array
    {
        $categorias = ['business', 'people', 'animals', 'nature', 'food', 'sports', 'transport'];

        return [
            'uuid' => $this->faker->uuid(),
            'imagen' => $this->faker->imageUrl(
                640,
                480,
                $this->faker->randomElement($categorias),
                true,
                'tarjeta'
            ),
            'metodo_id' => MetodoComunicacion::inRandomOrder()->first()->id ?? MetodoComunicacion::factory(),
        ];
    }
}
