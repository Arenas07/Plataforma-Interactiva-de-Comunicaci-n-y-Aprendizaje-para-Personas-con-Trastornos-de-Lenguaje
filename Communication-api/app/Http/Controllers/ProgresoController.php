<?php

namespace App\Http\Controllers;

use App\Models\Progreso;
use Illuminate\Http\Request;
use App\Http\Resources\ProgresoResource;

class ProgresoController extends Controller
{

    public function index()
    {
        $progresos = Progreso::with(['usuario', 'leccion'])->get();
        return ProgresoResource::collection($progresos);
    }

    public function show($id)
    {
        $progreso = Progreso::with(['usuario', 'leccion'])->findOrFail($id);
        return new ProgresoResource($progreso);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'usuario_id' => 'required|exists:users,id',
            'leccion_id' => 'required|exists:lecciones,id',
            'tarjetas_usadas' => 'required|integer|min:0',
            'completadas' => 'required|integer|min:0',
            'fecha' => 'required|date',
        ]);

        $progreso = Progreso::create($data);

        return new ProgresoResource($progreso);
    }

    public function update(Request $request, $id)
    {
        $progreso = Progreso::findOrFail($id);

        $data = $request->validate([
            'tarjetas_usadas' => 'nullable|integer|min:0',
            'completadas' => 'nullable|integer|min:0',
            'fecha' => 'nullable|date',
        ]);

        $progreso->update($data);

        return new ProgresoResource($progreso);
    }

    public function destroy($id)
    {
        $progreso = Progreso::findOrFail($id);
        $progreso->delete();

        return response()->json(['message' => 'Progreso eliminado correctamente']);
    }
}
