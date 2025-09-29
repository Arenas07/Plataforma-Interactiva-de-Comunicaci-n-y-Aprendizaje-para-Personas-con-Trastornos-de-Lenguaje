<?php

use App\Http\Controllers\MetodoComunicacionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('metodo', MetodoComunicacionController::class);
