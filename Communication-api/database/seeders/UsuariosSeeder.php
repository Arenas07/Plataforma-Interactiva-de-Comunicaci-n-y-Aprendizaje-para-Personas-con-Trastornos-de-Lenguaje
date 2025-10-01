<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\Rol;

class UsuariosSeeder extends Seeder
{
    public function run(): void
    {
        // Usuario administrador fijo
        Usuario::firstOrCreate([
            'email' => 'admin@plataforma.com',
        ], [
            'nombre' => 'Administrador Principal',
            'password' => bcrypt('admin123'),
            'rol_id' => Rol::where('nombre', 'Administrador')->first()?->id ?? 1,
        ]);

        Usuario::firstOrCreate([
            'email' => 'usuario@plataforma.com',
        ], [
            'nombre' => 'Usuario Demo',
            'password' => bcrypt('user123'),
            'rol_id' => Rol::where('nombre', 'Usuario')->first()?->id ?? 2,
        ]);

        Usuario::factory(10)->create();
    }
}
