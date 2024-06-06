<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/students', function () {
    return 'Obteniendo lista de estudiantes';
});
Route::get('/students/{id}', function () {
    return 'Obteniendo estudiante';
});


Route::post('/students', function () {
    return 'Creando estudiante';
});

Route::put('/students/{id}', function () {
    return 'Actualizar estudiante';
});
Route::delete('/students/{id}', function () {
    return 'Eliminando estudiante';
});
Route::deletenow('/students/{id}', function () {
    return 'Eliminando estudiante';
});