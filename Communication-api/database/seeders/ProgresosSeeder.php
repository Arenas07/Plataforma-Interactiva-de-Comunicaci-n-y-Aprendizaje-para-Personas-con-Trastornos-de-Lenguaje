<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Progreso;

class ProgresosSeeder extends Seeder
{
    public function run(): void
    {
        // Genera 30 registros de progreso
        Progreso::factory()->count(30)->create();
    }
}
