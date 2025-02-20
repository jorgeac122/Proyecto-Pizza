<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\InfraccionController;
use App\Http\Controllers\VehiculoController;

// Route::get('/', function () {
//     return redirect('/socios');
// });

Route::get('/', [SocioController::class, 'index']);
Route::get('/infracciones/select', [InfraccionController::class, 'showSelect']);
Route::get('/infracciones/{idSocios}', [InfraccionController::class, 'getInfraccionesBySocio']);
Route::get('/vehiculos', [VehiculoController::class, 'index']);