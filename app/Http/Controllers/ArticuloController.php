<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Inventario;
use App\Models\Marca;
use App\Models\Talla;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function articulos(){
        $articulos = Articulo::with(['marca:id,nombre,descuento'])->get();
        return view('articulos', compact('articulos'));
    }

    public function articulosId($id){
        $inventario = Inventario::with(['producto.marca', 'talla'])->find($id);
        $articulosRelacionados = Articulo::with(['marca:id,nombre,descuento'])
        ->where('id', '!=', $id)
        ->limit(4)
        ->get();
        $tallasDisponibles = Inventario::with('talla')
        ->where('producto_id', $inventario->producto_id)
        ->get()
        ->pluck('talla.talla_eur')
        ->unique() 
        ->sort(); 
        return view('articulos-id', compact('inventario', 'articulosRelacionados', 'tallasDisponibles'));
    }

    public function productos(Request $request)
    {
        
        $query = Articulo::with(['marca']); 

        // Verifica si hay parámetros de búsqueda
        if ($request->has('filter') && $request->has('search')) {
            $filter = $request->input('filter');
            $search = $request->input('search');

            switch ($filter) {
                case 'marca':
                    // Filtrar por nombre de la marca
                    $query->whereHas('marca', function ($q) use ($search) {
                        $q->where('nombre', 'like', '%' . $search . '%');
                    });
                    break;

                case 'nombre':
                case 'codigo':
                case 'color':
                    // Filtrar por campos directos del artículo
                    $query->where($filter, 'like', '%' . $search . '%');
                    break;

                case 'precio':
                    // Filtrar por precio exacto o rango
                    if (strpos($search, '-') !== false) {
                        [$min, $max] = explode('-', $search);
                        $query->whereBetween('precio', [(float) $min, (float) $max]);
                    } else {
                        $query->where('precio', (float) $search);
                    }
                    break;

                case 'talla':
                    // Filtrar por talla
                    $query->whereHas('inventarios.talla', function ($q) use ($search) {
                        $q->where('talla_eur', 'like', '%' . $search . '%');
                    });
                    break;
            }
        }

        // Paginar los resultados
        $articulos = $query->paginate(6);

        return view('trabajador/trabajador-productos', compact('articulos'));
    }
    
    public function create(){
        $marcas = Marca::all();
        return view('trabajador/trabajador-productos-create', compact('marcas'));
    }

    public function edit($id)
    {
    $articulo = Articulo::with('marca')->findOrFail($id);

    $marcas = Marca::all();

    return view('trabajador/trabajador-productos-edit', compact('articulo', 'marcas'));
    }
    
    public function store(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'marca_id' => 'required|exists:marcas,id',
            'codigo' => 'required|string|max:100|unique:productos,codigo',
            'imagen' => 'required|image|max:2048',
            'color' => 'required|string|max:50',
            'precio' => 'required|numeric|min:0',
            'descripcion' => 'nullable|string|max:500',
            'genero' => 'required|in:M,F',
        ]);        

        // Subir la imagen
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $filename = time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('img/productos'), $filename);
            $path = $filename;
        } else {
            return redirect()->back()->withErrors(['imagen' => 'La imagen es obligatoria.']);
        }

        Articulo::create([
            'nombre' => $request->input('nombre'),
            'marca_id' => $request->input('marca_id'),
            'codigo' => $request->input('codigo'),
            'imagen' => $path,
            'color' => $request->input('color'),
            'precio' => $request->input('precio'),
            'descripcion' => $request->input('descripcion'),
            'genero' => $request->input('genero'),
        ]);

        return redirect()->route('productos')->with('success', 'Producto guardado exitosamente.');
    }

    public function destroy($id)
    {
        $articulo = Articulo::find($id);

        if (!$articulo) {
            return redirect()->back()->with('error', 'Producto no encontrado.');
        }

        $imagenPath = public_path('img/productos/' . $articulo->imagen);
        if (file_exists($imagenPath)) {
            unlink($imagenPath);
        }

        $articulo->delete();

        return redirect()->route('productos')->with('success', 'Producto eliminado exitosamente.');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'marca_id' => 'required|exists:marcas,id',  
            'codigo' => 'required|string|max:100',
            'imagen' => 'nullable|image|max:2048',
            'color' => 'required|string|max:50',
            'precio' => 'required|numeric|min:0',
            'descripcion' => 'nullable|string|max:500',
            'genero' => 'required|in:M,F',
        ]);

        // Buscar el artículo por ID
        $articulo = Articulo::findOrFail($id);

        // Actualizar los campos del artículo
        $articulo->update([
            'nombre' => $request->input('nombre'),
            'marca_id' => $request->input('marca_id'),  
            'codigo' => $request->input('codigo'),
            'color' => $request->input('color'),
            'precio' => $request->input('precio'),
            'descripcion' => $request->input('descripcion'),
            'genero' => $request->input('genero'),
        ]);

        if ($request->hasFile('imagen')) {
            $imagenPath = public_path('img/productos/' . $articulo->imagen);
            if (file_exists($imagenPath)) {
                unlink($imagenPath);
            }

            $imagen = $request->file('imagen');
            $filename = time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('img/productos'), $filename);
            $articulo->imagen = $filename;
            $articulo->save();
        }

        return redirect()->route('productos')->with('success', 'Artículo actualizado exitosamente.');
    }


    public function showDetails($id)
    {
        $articulo = Articulo::with(['marca'])->findOrFail($id);  
        return view('trabajador.trabajador-productos-ver', compact('articulo'));
    }

    public function add($id)
    {
        $producto = Articulo::findOrFail($id);

        $tallas = Talla::all();

        return view('trabajador/trabajador-inventario-add-tallas', compact('producto', 'tallas'));
    }
}
