<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AsistenciaController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\GrdoController;
use App\Http\Controllers\Api\TrabajdorController;
use App\Http\Controllers\Api\SeccionController;
use App\Http\Controllers\Api\TipoTrabajadorController;
use App\Http\Controllers\GradoController;

Route::get('/prueba', function () {
    return "API funcionando";
});


Route::apiResource('asistencias', AsistenciaController::class);
Route::apiResource('students', StudentController::class);
Route::apiResource('grados', GradoController::class);
Route::apiResource('seccions',SeccionController::class);
Route::apiResource('trabajadores', TrabajdorController::class);
Route::apiResource('tipo_trabajadors', TipoTrabajadorController::class);
