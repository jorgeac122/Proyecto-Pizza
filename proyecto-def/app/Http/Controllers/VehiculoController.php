<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\JsonResponse;

class VehiculoController extends Controller
{
    // public function index(): JsonResponse
    // {
    //     try {
    //         $vehiculos = Vehiculo::all();
    //         return response()->json($vehiculos, 200);
    //     } catch (\Exception $e ) {
    //         return response()->json(['error' => $e->getMessage()], 500);
    //     }
    // }

    public function index()
    {
        // Obtener todos los vehículos con la información del socio relacionado
        $vehiculos = Vehiculo::with('socio')->get();

        // Retornar la vista con los datos de los vehículos
        return view('vehiculos.index', compact('vehiculos'));
    }
}
