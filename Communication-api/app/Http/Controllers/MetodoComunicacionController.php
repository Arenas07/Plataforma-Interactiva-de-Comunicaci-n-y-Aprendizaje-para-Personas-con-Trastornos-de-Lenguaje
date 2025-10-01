<?php

namespace App\Http\Controllers;

use App\Models\MetodoComunicacion;
use App\Http\Resources\MetodoComunicacionResource;
use Illuminate\Http\Request;

class MetodoComunicacionController extends Controller
{

    public function index()
    {
        return MetodoComunicacionResource::collection(
            MetodoComunicacion::with('tarjetas')->get()
        );
    }

    public function show($id)
    {
        return new MetodoComunicacionResource(
            MetodoComunicacion::with('tarjetas')->findOrFail($id)
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        return MetodoComunicacion::create($validated);
    }

    public function update(Request $request, $id)
    {
        $metodo = MetodoComunicacion::findOrFail($id);

        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        $metodo->update($validated);

        return $metodo;
    }

    public function destroy($id)
    {
        $metodo = MetodoComunicacion::findOrFail($id);
        $metodo->delete();

        return response()->json(['message' => 'Método eliminado correctamente']);
    }
}
