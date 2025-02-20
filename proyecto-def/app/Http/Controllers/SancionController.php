<?php

namespace App\Http\Controllers;

use App\Models\Sancion;
use Illuminate\Http\JsonResponse;

class SancionController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            $sanciones = Sancion::all();
            return response()->json($sanciones, 200);
        } catch (\Exception $e ) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
