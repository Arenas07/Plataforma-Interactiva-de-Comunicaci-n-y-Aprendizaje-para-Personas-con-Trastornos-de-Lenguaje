<?php

namespace App\Http\Controllers;

use App\Models\MetodoComunicacion;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MetodoComunicacionController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(MetodoComunicacion::all(), 200);
    }

    public function store(Request $request): JsonResponse
    {
        $metodo = MetodoComunicacion::create($request->validated());
        return response()->json($metodo, 201);
    }

    public function show(MetodoComunicacion $metodo): JsonResponse
    {
        return response()->json($metodo, 200);
    }

    public function update(Request $request, MetodoComunicacion $metodo): JsonResponse
    {
        $metodo->update($request->validated());
        return response()->json($metodo);
    }

    public function destroy(MetodoComunicacion $metodo): JsonResponse
    {
        $metodo->delete();
        return response()->json(null, 204);
    }
}
