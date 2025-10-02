<?php

namespace App\Http\Controllers;

use App\Models\Progreso;
use App\Models\Tarjeta;
use App\Models\Usuario;
use Illuminate\Http\Request;

use function Laravel\Prompts\select;

class ReportController extends Controller
{
    public function index()
    {
        $totalUsuarios = Usuario::count();
        $totalTarjetas = Tarjeta::count();
        $completadas = Progreso::where('completadas', '>', 0)->sum('completadas');
        return response()->json([
            'Total Usuarios' => $totalUsuarios,
            'Total Tarjetas' => $totalTarjetas,
            'Tarjetas completadas' => $completadas
        ]);
    }
}
