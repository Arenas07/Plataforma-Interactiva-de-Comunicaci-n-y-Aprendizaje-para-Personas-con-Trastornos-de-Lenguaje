<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Leccion;

class LeccionesSeeder extends Seeder
{
    public function run(): void
    {
        // Lecciones fijas iniciales
        $lecciones = [
            ['titulo' => 'Colores Básicos', 'tipo' => 'Diaria'],
            ['titulo' => 'Saludos Comunes', 'tipo' => 'Diaria'],
            ['titulo' => 'Números del 1 al 10', 'tipo' => 'Refuerzo'],
            ['titulo' => 'Animales Domésticos', 'tipo' => 'Refuerzo'],
        ];

        foreach ($lecciones as $l) {
            Leccion::firstOrCreate($l);
        }

        // Generar algunas aleatorias con Factory
        Leccion::factory(10)->create();
    }
}
