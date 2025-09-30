<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        // Roles fijos (recomendado en producción)
        $roles = [
            ['nombre' => 'Administrador'],
            ['nombre' => 'Usuario']
        ];

        foreach ($roles as $rol) {
            Rol::firstOrCreate($rol);
        }

        // Opcional: generar roles falsos con factory (solo pruebas)
        // Role::factory(3)->create();
    }
}
