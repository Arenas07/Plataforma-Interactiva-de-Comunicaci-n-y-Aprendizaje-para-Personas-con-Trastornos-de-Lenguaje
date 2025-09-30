<?php

namespace App\Http\Controllers;

use App\Models\Leccion;
use Illuminate\Http\Request;
use App\Http\Resources\LeccionResource;

class LeccionController extends Controller
{
    public function index()
    {
        return LeccionResource::collection(
            Leccion::with(['tarjetas.metodo', 'tarjetas.traducciones']
        )->get()
    );
    }

    public function show($id)
    {
        $leccion = Leccion::with(['tarjetas.metodo', 'tarjetas.traducciones'])->findOrFail($id);
    return new LeccionResource($leccion);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titulo' => 'required|string|max:255',
            'tipo' => 'required|string|max:100',
        ]);

        $leccion = Leccion::create($data);
        return response()->json($leccion, 201);
    }


    public function update(Request $request, $id)
    {
        $leccion = Leccion::findOrFail($id);

        $data = $request->validate([
            'titulo' => 'sometimes|string|max:255',
            'tipo' => 'sometimes|string|max:100',
        ]);

        $leccion->update($data);
        return response()->json($leccion, 200);
    }


    public function destroy($id)
    {
        $leccion = Leccion::findOrFail($id);
        $leccion->delete();

        return response()->json(['message' => 'Lección eliminada'], 200);
    }


    public function addTarjeta(Request $request, $id)
    {
        $leccion = Leccion::findOrFail($id);

        $data = $request->validate([
            'tarjeta_id' => 'required|exists:tarjetas,id',
        ]);

        $leccion->tarjetas()->attach($data['tarjeta_id']);

        return response()->json(['message' => 'Tarjeta asignada'], 201);
    }

    public function removeTarjeta($id, $tarjetaId)
    {
        $leccion = Leccion::findOrFail($id);
        $leccion->tarjetas()->detach($tarjetaId);

        return response()->json(['message' => 'Tarjeta removida'], 200);
    }
}
