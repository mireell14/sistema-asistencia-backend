<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AsistenciaController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\GrdoController;
use App\Models\Student;

Route::get('/prueba', function () {
    return "API funcionando";
});

Route::apiResource('asistencias', AsistenciaController::class);
Route::apiResource('students', StudentController::class);
route :: apiResource('grado', 'App\Http\Controllers\Api\GradoController');
