<?php

namespace App\Http\Controllers;

use App\Models\Socio;
use App\Models\Infraccion;
use Illuminate\Http\JsonResponse;

class InfraccionController extends Controller
{
    public function showSelect()
    {
        // Obtener todos los socios
        $socios = Socio::all();
        
        // Retornar la vista con los socios
        return view('infracciones.select', compact('socios'));
    }

    public function getInfraccionesBySocio($idSocios)
    {
        // Obtener infracciones por id del socio
        $infracciones = Infraccion::where('Socios_idSocios', $idSocios)->get();
        
        // Retornar la respuesta en formato JSON
        return response()->json($infracciones);
    }
}
