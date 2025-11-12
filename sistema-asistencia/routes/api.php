<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Tipo_trabajadorController; 

Route::get('/prueba', function () {
    return "API funcionando";
});

Route::apiResource('tipo_trabajadores', Tipo_trabajadorController::class);
