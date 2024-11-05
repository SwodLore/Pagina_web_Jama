<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class TrabajadorController extends Controller
{
    public function trabajadores(){
        return view('trabajador/trabajador-welcome');
    }

    public function inventario(Request $request){
        $query = Articulo::query(); // Crea una consulta base

        // Verifica si hay parámetros de búsqueda
        if ($request->has('filter') && $request->has('search')) {
            $filter = $request->input('filter');
            $search = $request->input('search');

            // Filtra según el valor del filtro seleccionado
            $query->where($filter, 'like', '%' . $search . '%');
        }

        $articulos = $query->paginate(6);
        return view('trabajador/trabajador-inventario', compact('articulos'));
    }

    public function create(){
        return view('trabajador/trabajador-inventario-create');
    }

    public function edit($id){
        $articulo = Articulo::find($id);
        return view('trabajador/trabajador-inventario-edit', compact('articulo'));
    }
    
    public function store(Request $request){
        $articulo = new Articulo;

        $request->validate([
            'nombre' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'codigo' => 'required|string|max:100',
            'imagen' => 'required|image|max:2048',
            'color' => 'required|string|max:50',
            'precio' => 'required|numeric|min:0',
            'talla' => 'required|string|max:10',
            'descripcion' => 'nullable|string|max:500',
        ]);

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $filename = time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('img/productos'), $filename);
            $path = $filename; 
        } else {
            return redirect()->back()->withErrors(['imagen' => 'La imagen es obligatoria.']);
        }

        $articulo->nombre = $request->input('nombre');
        $articulo->marca = $request->input('marca');
        $articulo->codigo = $request->input('codigo');
        $articulo->imagen = $path;
        $articulo->color = $request->input('color');
        $articulo->precio = $request->input('precio');
        $articulo->talla = $request->input('talla');
        $articulo->descripcion = $request->input('descripcion');
        $articulo->save();
        return redirect('/trabajadores/inventario')->with('success', 'Artículo guardado exitosamente');
    }
    public function destroy($id)
    {
        // Buscar el artículo por ID
        $articulo = Articulo::find($id);

        // Verificar si el artículo existe
        if (!$articulo) {
            return redirect()->back()->with('error', 'Producto no encontrado.');
        }

        // Eliminar imagen asociada si existe
        $imagenPath = public_path('img/productos/' . $articulo->imagen);
        if (file_exists($imagenPath)) {
            unlink($imagenPath);
        }

        // Eliminar el artículo
        $articulo->delete();

        return redirect()->back()->with('success', 'Producto eliminado exitosamente.');
    }

    public function update(Request $request, $id)
    {   

        $request->validate([
            'nombre' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'codigo' => 'required|string|max:100',
            'imagen' => 'nullable|image|max:2048', 
            'color' => 'required|string|max:50',
            'precio' => 'required|numeric|min:0',
            'talla' => 'required|string|max:10',
            'descripcion' => 'nullable|string|max:500',
        ]);

        $articulo = Articulo::findOrFail($id);
        $articulo->nombre = $request->input('nombre');
        $articulo->marca = $request->input('marca');
        $articulo->codigo = $request->input('codigo');
        $articulo->color = $request->input('color');
        $articulo->precio = $request->input('precio');
        $articulo->talla = $request->input('talla');
        $articulo->descripcion = $request->input('descripcion');

        // Actualizar imagen si se sube una nueva
        if ($request->hasFile('imagen')) {
            // Eliminar la imagen antigua si existe
            $imagenPath = public_path('img/productos/' . $articulo->imagen);
            if (file_exists($imagenPath)) {
                unlink($imagenPath);
            }

            // Guardar la nueva imagen
            $imagen = $request->file('imagen');
            $filename = time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('img/productos'), $filename);
            $articulo->imagen = $filename;
        }

        $articulo->save();

        return redirect('/trabajadores/inventario')->with('success', 'Artículo actualizado exitosamente');
    }
    public function showDetails($id)
    {
        // Obtener el producto por ID
        $articulo = Articulo::findOrFail($id); // Usamos findOrFail para manejar el caso de producto no encontrado
        
        // Retornar la vista de detalles del producto
        return view('trabajador/trabajador-inventario-ver', compact('articulo'));
    }

    public function ventas(){
        return view('trabajador/trabajador-ventas');
    }
    public function pedidos(){
        return view('trabajador/trabajador-pedidos');
    }

}
