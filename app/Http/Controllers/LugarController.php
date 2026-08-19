<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use Illuminate\Http\Request;

class LugarController extends Controller
{
    // Listar todos los lugares
    public function index()
    {
        $lugares = Lugar::all();
        return view('lugares.index', compact('lugares'));
    }

    // Mostrar el detalle de un lugar
    public function show($id)
    {
        $lugar = Lugar::find($id);

        if (!$lugar) {
            abort(404, 'Lugar turístico no encontrado.');
        }

        return view('lugares.show', compact('lugar'));
    }

    // Procesar formulario de contacto
    public function contacto(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email',
            'mensaje' => 'required|min:10',
        ]);

        return back()->with('exito', '¡Gracias ' . $validated['nombre'] . '! Hemos recibido tu solicitud sobre este destino.');
    }
}
