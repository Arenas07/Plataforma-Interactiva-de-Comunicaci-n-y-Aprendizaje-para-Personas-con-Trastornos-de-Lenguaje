<?php

namespace App\Http\Controllers;

use App\Models\Tarjeta;
use Illuminate\Http\Request;
use App\Http\Resources\TarjetaResource;
use App\Http\Resources\TraduccionResource;
use App\Models\TarjetaTraduccion;

class TarjetaController extends Controller
{

    public function index()
    {
        $tarjetas = Tarjeta::with('traducciones')->get();
        return TarjetaResource::collection($tarjetas);
    }

    public function show($id)
    {
        $tarjeta = Tarjeta::with('traducciones')->findOrFail($id);
        return new TarjetaResource($tarjeta);
    }

    public function store(Request $request)
    {
        $tarjeta = Tarjeta::create($request->all());
        return new TarjetaResource($tarjeta);
    }

    public function update(Request $request, $id)
    {
        $tarjeta = Tarjeta::findOrFail($id);
        $tarjeta->update($request->all());
        return new TarjetaResource($tarjeta);
    }

    public function destroy($id)
    {
        $tarjeta = Tarjeta::findOrFail($id);
        $tarjeta->delete();
        return response()->json(null, 204);
    }

    public function traducciones($id)
    {
        $tarjeta = Tarjeta::findOrFail($id);
        return TraduccionResource::collection($tarjeta->traducciones);
    }

    public function storeTraduccion(Request $request, $id)
    {
        $tarjeta = Tarjeta::findOrFail($id);

        $data = $request->validate([
            'idioma' => 'required|string|max:5',
            'frase' => 'required|string',
            'audio' => 'nullable|string', 
        ]);

        $traduccion = $tarjeta->traducciones()->create($data);

        return new TraduccionResource($traduccion);
    }

    public function updateTraduccion(Request $request, $id, $tradId)
    {
        $traduccion = TarjetaTraduccion::where('tarjeta_id', $id)->findOrFail($tradId);

        $data = $request->validate([
            'idioma' => 'sometimes|string|max:5',
            'frase' => 'sometimes|string',
            'audio' => 'nullable|string',
        ]);

        $traduccion->update($data);

        return new TraduccionResource($traduccion);
    }

    public function destroyTraduccion($id, $tradId)
    {
        $traduccion = TarjetaTraduccion::where('tarjeta_id', $id)->findOrFail($tradId);
        $traduccion->delete();

        return response()->json(['message' => 'Traducción eliminada']);
    }
}
