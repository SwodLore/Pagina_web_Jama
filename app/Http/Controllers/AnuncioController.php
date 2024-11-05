<?php

namespace App\Http\Controllers;

use App\Models\Anuncio;
use Illuminate\Http\Request;

class AnuncioController extends Controller
{
    public function anuncios(){
        $anuncios = Anuncio::paginate(2);
        return view('/trabajador/trabajador-anuncios', compact('anuncios'));
    }
    public function create(){
        return view('trabajador/trabajador-anuncios-create');
    }

    public function store(Request $request){
        $anuncio = new anuncio;

        $request->validate([
            'nombre' => 'required|string|max:255',
            'imagen' => 'required|image|max:2048',
        ]);

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $filename = time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('img/anuncios'), $filename);
            $path = $filename; 
        } else {
            return redirect()->back()->withErrors(['imagen' => 'La imagen es obligatoria.']);
        }

        $anuncio->nombre = $request->input('nombre');
        $anuncio->imagen = $path;
        $anuncio->save();
        return redirect('/trabajadores/anuncio')->with('success', 'Anuncio guardado exitosamente');
    }

    public function destroy($id)
    {
        // Buscar el artículo por ID
        $tienda = Anuncio::find($id);

        // Verificar si el artículo existe
        if (!$tienda) {
            return redirect()->back()->with('error', 'Producto no encontrado.');
        }

        // Eliminar imagen asociada si existe
        $imagenPath = public_path('img/anuncios/' . $tienda->imagen);
        if (file_exists($imagenPath)) {
            unlink($imagenPath);
        }

        // Eliminar el artículo
        $tienda->delete();

        return redirect()->back()->with('success', 'Producto eliminado exitosamente.');
    }
    public function showDetails($id)
    {
        // Obtener el producto por ID
        $anuncios = Anuncio::findOrFail($id); // Usamos findOrFail para manejar el caso de producto no encontrado
        
        // Retornar la vista de detalles del producto
        return view('trabajador/trabajador-anuncios-ver', compact('anuncios'));
    }
}
