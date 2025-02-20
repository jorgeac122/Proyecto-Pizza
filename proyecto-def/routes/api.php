<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\SancionController;
use App\Http\Controllers\InfraccionController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/socios', [SocioController::class, 'index']);
Route::get('/vehiculos', [VehiculoController::class, 'index']);
Route::get('/sanciones', [SancionController::class, 'index']);
Route::get('/infracciones', [InfraccionController::class, 'index']);