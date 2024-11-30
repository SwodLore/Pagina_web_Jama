<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function marcas(){
        $marcas = Marca::paginate(5);
        return view('trabajador/trabajador-marca',compact('marcas'));
    }
    public function create(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:marcas|max:50',
            'descuento' => 'required|integer|min:0|max:100',
        ]);

        Marca::create([
            'nombre' => $request->nombre,
            'descuento' => $request->descuento,
        ]);

        return redirect()->route('marcas')->with('success', 'Marca creada exitosamente.');
    }

    public function destroy($id)
    {
        $marca = Marca::findOrFail($id);
        $marca->delete();

        return redirect()->route('marcas')->with('error', 'Marca eliminada exitosamente.');
    }

}
