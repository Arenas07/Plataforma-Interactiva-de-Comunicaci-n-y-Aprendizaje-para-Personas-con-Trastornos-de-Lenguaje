<?php

use App\Http\Controllers\MetodoComunicacionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\LeccionController;

Route::apiResources([
    'lecciones' => LeccionController::class,
]);

Route::post('/lecciones/{id}/tarjetas', [LeccionController::class, 'addTarjeta']);
Route::delete('/lecciones/{id}/tarjetas/{tarjetaId}', [LeccionController::class, 'removeTarjeta']);

Route::apiResource('metodo', MetodoComunicacionController::class);

