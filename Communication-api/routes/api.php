<?php

use App\Http\Controllers\MetodoComunicacionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LeccionController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TarjetaController;
use App\Http\Controllers\ProgresoController;

Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/users', [UsuarioController::class, 'index']);
    Route::get('/users/{id}', [UsuarioController::class, 'show']);
    Route::put('/users/{id}', [UsuarioController::class, 'update']);
    Route::delete('/users/{id}', [UsuarioController::class, 'destroy']);
});

Route::apiResource('lecciones', LeccionController::class);
Route::post('/lecciones/{id}/tarjetas', [LeccionController::class, 'addTarjeta']);
Route::delete('/lecciones/{id}/tarjetas/{tarjetaId}', [LeccionController::class, 'removeTarjeta']);

Route::apiResource('tarjetas', TarjetaController::class);

Route::get('/tarjetas/{id}/traducciones', [TarjetaController::class, 'indexTraducciones']);
Route::post('/tarjetas/{id}/traducciones', [TarjetaController::class, 'storeTraduccion']);
Route::put('/tarjetas/{id}/traducciones/{tradId}', [TarjetaController::class, 'updateTraduccion']);
Route::delete('/tarjetas/{id}/traducciones/{tradId}', [TarjetaController::class, 'destroyTraduccion']);

Route::apiResource('metodo', MetodoComunicacionController::class);

Route::apiResource('progreso', ProgresoController::class);

