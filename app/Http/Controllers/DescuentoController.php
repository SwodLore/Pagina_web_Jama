<?php

namespace App\Http\Controllers;

use App\Models\Descuento;
use Illuminate\Http\Request;

class DescuentoController extends Controller
{
    public function descuentos(){
        $descuentos = Descuento::paginate(5);
        return view('trabajador/trabajador-descuento',compact('descuentos'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'codigo' => 'required|unique:descuentos|max:20',
            'cantidad' => 'required|integer|min:1',
        ]);
    
        Descuento::create([
            'codigo' => $request->codigo,
            'cantidad' => $request->cantidad,
        ]);
    
        return redirect()->route('descuentos')->with('success', 'Descuento creado exitosamente.');
    }
    
    public function destroy($id)
    {
        $descuento = Descuento::findOrFail($id);
        $descuento->delete();

        return redirect()->route('descuentos')->with('error', 'Descuento eliminado exitosamente.');
    }
}
