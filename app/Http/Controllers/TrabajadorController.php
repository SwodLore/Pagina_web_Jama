<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthTrabajadorRequest;
use App\Models\Articulo;
use App\Models\Descuento;
use App\Models\Inventario;
use App\Models\Marca;
use App\Models\Talla;
use Illuminate\Http\Request;

class TrabajadorController extends Controller
{
    public function trabajadores(){
        return view('trabajador/trabajador-welcome');
    }

    public function inventario(Request $request)
    {
        $query = Inventario::with(['producto.marca', 'talla']);

        if ($request->has('filter') && $request->has('search')) {
            $filter = $request->input('filter');
            $search = $request->input('search');
    
            switch ($filter) {
                case 'marca':
                    // Filtrar por nombre de la marca
                    $query->whereHas('producto.marca', function ($q) use ($search) {
                        $q->where('nombre', 'like', '%' . $search . '%');
                    });
                    break;
    
                case 'nombre':
                case 'codigo':
                case 'color':
                    // Filtrar por campos directos del producto
                    $query->whereHas('producto', function ($q) use ($filter, $search) {
                        $q->where($filter, 'like', '%' . $search . '%');
                    });
                    break;
    
                case 'precio':
                    // Filtrar por precio exacto o rango
                    if (strpos($search, '-') !== false) {
                        // Si el usuario ingresa un rango (ejemplo: 50-100)
                        [$min, $max] = explode('-', $search);
                        $query->whereHas('producto', function ($q) use ($min, $max) {
                            $q->whereBetween('precio', [(float) $min, (float) $max]);
                        });
                    } else {
                        // Precio exacto
                        $query->whereHas('producto', function ($q) use ($search) {
                            $q->where('precio', (float) $search);
                        });
                    }
                    break;
    
                case 'talla':
                    // Filtrar por talla
                    $query->whereHas('talla', function ($q) use ($search) {
                        $q->where('talla_eur', 'like', '%' . $search . '%');
                    });
                    break;
            }
        }

        // Paginar los resultados
        $inventarios = $query->get()->groupBy('producto_id');

        return view('trabajador.trabajador-inventario', compact('inventarios'));
    }

    public function create()
    {
        $articulos = Articulo::whereDoesntHave('inventarios.talla')->get();

        return view('trabajador.trabajador-inventario-create', compact('articulos'));
    }

    public function add($id){
        $inventarios = Inventario::with(['producto.marca', 'talla'])->where('producto_id', $id)->get();

        $tallas = Talla::all();
        if ($inventarios->isEmpty()) {
            abort(404, 'Inventario no encontrado');
        }

        $tallasUnicas = $inventarios->pluck('talla')->unique('id');

        return view('trabajador/trabajador-inventario-add', compact('inventarios', 'tallas','tallasUnicas'));
    }
    
    public function store(Request $request, $id){
        // Validar los datos recibidos
        $validated = $request->validate([
            'talla_eur' => 'required|exists:tallas,id',  
            'cantidad' => 'required|integer|min:0',
        ]);

        // Crear un nuevo inventario
        Inventario::create([
            'producto_id' => $id, 
            'talla_id' => $validated['talla_eur'],  
            'cantidad' => $validated['cantidad'],  
        ]);

        // Redirigir con mensaje de éxito
        return redirect()->route('inventario.add', $id)
            ->with('success', 'Nueva talla y cantidad agregada correctamente.');
    }

    public function destroy($id)
    {
        $inventario = Inventario::findOrFail($id);

        $inventario->delete();

        return redirect()->route('inventario.showDetails', $inventario->producto_id)
            ->with('success', 'Inventario eliminado correctamente.');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'talla_eur' => 'required|exists:tallas,id', 
            'cantidad' => 'required|integer|min:0',
        ]);

        $inventario = Inventario::findOrFail($id);

        $inventario->cantidad = $validated['cantidad'];

        $inventario->talla_id = $validated['talla_eur'];

        $inventario->save();

        return redirect()->route('inventario.edit', $inventario->producto_id)
            ->with('success', 'Inventario actualizado correctamente.');
    }


    public function edit($id)
    {
        
        $inventarios = Inventario::with(['producto.marca', 'talla'])->where('producto_id', $id)->get();

        $tallas = Talla::all();
        
        if ($inventarios->isEmpty()) {
            abort(404, 'Inventario no encontrado');
        }

        return view('trabajador/trabajador-inventario-edit', compact('inventarios', 'tallas'));
    }

    public function pedidos(){
        return view('trabajador/trabajador-pedidos');
    }

    public function login(){
        if(!auth()->guard('trabajador')->check()){
            return view('trabajador/login-trabajador');
        }
        return redirect()->route('trabajadores.vista');
    }
    
    public function auth(AuthTrabajadorRequest $request){
        
        if($request->validated()){
            if(auth()->guard('trabajador')->attempt([
                'email' => $request->email,
                'password' => $request->password,
            ])){
                $request->session()->regenerate();
                session()->flash('success', '¡Inicio de sesión exitoso! Bienvenido.');
                return redirect()->route('trabajadores.vista');
            }else{
                return redirect()->route('login.trabajador')->withErrors(['error' => 'Credenciales incorrectas.'])
                ->withInput();
            }
        }
    }

    public function logout(){
        auth()->guard('trabajador')->logout();
        return redirect()->route('login.trabajador');
    }
}
