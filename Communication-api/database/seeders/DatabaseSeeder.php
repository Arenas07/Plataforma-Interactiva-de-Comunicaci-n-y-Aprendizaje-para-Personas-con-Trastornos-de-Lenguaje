<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RolesSeeder;
use Database\Seeders\UsuariosSeeder;
use Database\Seeders\MetodosComunicacionSeeder;
use Database\Seeders\TarjetasSeeder;
use Database\Seeders\LeccionesSeeder;
use Database\Seeders\LeccionesTarjetasSeeder;
use Database\Seeders\TarjetasTraduccionesSeeder;
use Database\Seeders\ProgresosSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            RolesSeeder::class,
            UsuariosSeeder::class,
            MetodosComunicacionSeeder::class,
            TarjetasSeeder::class,
            LeccionesSeeder::class,
            LeccionesTarjetasSeeder::class,
            TarjetasTraduccionesSeeder::class,
            ProgresosSeeder::class,
        ]);
    }
}
