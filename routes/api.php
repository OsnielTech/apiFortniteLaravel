<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\skinController;

Route::get('/skins', [skinController::class, 'index']);

Route::get('/skins/{id}', function () {
    return 'Obteniendo skin';
});


Route::post('/skins', [skinController::class, 'store'] );

Route::put('/skins/{id}', function () {
    return 'Actualizar skin';
});
Route::delete('/skins/{id}', function () {
    return 'Eliminando skin';
});

