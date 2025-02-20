<?php

namespace App\Http\Controllers;

use App\Models\Socio;
use Illuminate\Http\Request;

class SocioController extends Controller
{
    public function index()
    {
        try {
            $socios = Socio::all();
            #return response()->json($socios, 200);
            return view('socios.index', compact('socios'));
        } catch (\Exception $e ) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
