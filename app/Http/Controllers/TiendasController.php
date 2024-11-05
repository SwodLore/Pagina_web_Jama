<?php

namespace App\Http\Controllers;

use App\Models\Tienda;
use Illuminate\Http\Request;

class TiendasController extends Controller
{
    public function tiendas(){
        $tiendas = Tienda::paginate(4);
        return view('trabajador/trabajador-tiendas', compact('tiendas'));
    }

    public function create(){
        return view('trabajador/trabajador-tiendas-create');
    }

    public function edit($id){
        $tienda = Tienda::find($id);
        return view('trabajador/trabajador-tiendas-edit', compact('tienda'));
    }

    public function store(Request $request){
        $tienda = new tienda;

        $request->validate([
            'calle' => 'required|string|max:255',
            'numero' => 'required|numeric|min:0',
            'imagen' => 'required|image|max:2048',
            'distrito' => 'required|string|max:255',
            'provincia' => 'required|string|max:255',
            'departamento' => 'required|string|max:255',
            'link' => 'required|string|max:255',
        ]);

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $filename = time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('img/tiendas'), $filename);
            $path = $filename; 
        } else {
            return redirect()->back()->withErrors(['imagen' => 'La imagen es obligatoria.']);
        }

        $tienda->calle = $request->input('calle');
        $tienda->numero = $request->input('numero');
        $tienda->imagen = $path;
        $tienda->distrito = $request->input('distrito');
        $tienda->provincia = $request->input('provincia');
        $tienda->departamento = $request->input('departamento');
        $tienda->link = $request->input('link');
        $tienda->save();
        return redirect('/trabajadores/tienda')->with('success', 'Tienda guardado exitosamente');
    }

    public function destroy($id)
    {
        // Buscar el artículo por ID
        $tienda = Tienda::find($id);

        // Verificar si el artículo existe
        if (!$tienda) {
            return redirect()->back()->with('error', 'Producto no encontrado.');
        }

        // Eliminar imagen asociada si existe
        $imagenPath = public_path('img/productos/' . $tienda->imagen);
        if (file_exists($imagenPath)) {
            unlink($imagenPath);
        }

        // Eliminar el artículo
        $tienda->delete();

        return redirect()->back()->with('success', 'Producto eliminado exitosamente.');
    }

    public function update(Request $request, $id)
    {   

        $request->validate([
            'calle' => 'required|string|max:255',
            'numero' => 'required|numeric|min:0',
            'imagen' => 'required|image|max:2048',
            'distrito' => 'required|string|max:255',
            'provincia' => 'required|string|max:255',
            'departamento' => 'required|string|max:255',
            'link' => 'required|string|max:255',
        ]);

        $tienda = Tienda::findOrFail($id);
        $tienda->calle = $request->input('calle');
        $tienda->numero = $request->input('numero');
        $tienda->distrito = $request->input('distrito');
        $tienda->provincia = $request->input('provincia');
        $tienda->departamento = $request->input('departamento');
        $tienda->link = $request->input('link');

        // Actualizar imagen si se sube una nueva
        if ($request->hasFile('imagen')) {
            // Eliminar la imagen antigua si existe
            $imagenPath = public_path('img/tiendas/' . $tienda->imagen);
            if (file_exists($imagenPath)) {
                unlink($imagenPath);
            }

            // Guardar la nueva imagen
            $imagen = $request->file('imagen');
            $filename = time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('img/tiendas'), $filename);
            $tienda->imagen = $filename;
        }

        $tienda->save();

        return redirect('/trabajadores/tienda')->with('success', 'Artículo actualizado exitosamente');
    }
    public function showDetails($id)
    {
        // Obtener el producto por ID
        $tienda = Tienda::findOrFail($id); // Usamos findOrFail para manejar el caso de producto no encontrado
        
        // Retornar la vista de detalles del producto
        return view('trabajador/trabajador-tiendas-ver', compact('tienda'));
    }
}
