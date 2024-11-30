<?php

namespace App\Http\Controllers;

use App\Models\Talla;
use Illuminate\Http\Request;

class TallaController extends Controller
{
    public function tallas(){
        $tallas = Talla::paginate(5);
        return view('trabajador/trabajador-talla',compact('tallas'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'cm' => 'required|numeric|min:0',
            'talla_us_men' => 'required|numeric|min:0',
            'talla_us_women' => 'required|numeric|min:0',
            'talla_eur' => 'required|string|max:10',
        ]);

        Talla::create([
            'cm' => $request->cm,
            'talla_us_men' => $request->talla_us_men,
            'talla_us_women' => $request->talla_us_women,
            'talla_eur' => $request->talla_eur,
        ]);

        return redirect()->route('tallas')->with('success', 'Talla creada exitosamente.');
    }

    public function destroy($id)
    {
        $talla = Talla::findOrFail($id);
        $talla->delete();

        return redirect()->route('tallas')->with('success', 'Talla eliminada exitosamente.');
    }
}
