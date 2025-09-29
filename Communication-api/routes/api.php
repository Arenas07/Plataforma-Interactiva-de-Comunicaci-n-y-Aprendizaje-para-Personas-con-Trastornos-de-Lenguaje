<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MetodoComunicacionController;

Route::get('/test', function () {
    return response('ok');
});

Route::apiResources([
    'metodo'  => MetodoComunicacionController::class,
]);
