<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tarjeta;
use App\Models\MetodoComunicacion;

class TarjetasSeeder extends Seeder
{
    public function run(): void
    {
        // Asegurarse que existan métodos de comunicación
        if (MetodoComunicacion::count() === 0) {
            $this->call(MetodoComunicacionSeeder::class);
        }

        foreach (MetodoComunicacion::all() as $metodo) {
            Tarjeta::create([
                'uuid' => fake()->uuid(),
                'imagen' => fake()->imageUrl(640, 480, 'business', true, 'tarjeta'),
                'metodo_id' => $metodo->id,
            ]);
        }
    }
}
