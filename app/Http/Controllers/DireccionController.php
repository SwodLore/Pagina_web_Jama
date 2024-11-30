<?php

namespace App\Http\Controllers;

use App\Models\direcciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DireccionController extends Controller
{
    public function create()
    {
        $user = Auth::guard('user')->user(); // Obtener el usuario autenticado
        return view('users/direcciones-create', compact('user'));
    }

    // Almacenar la nueva dirección
    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'referencia' => 'nullable|string|max:255',
            'departamento' => 'required|string|max:100',
            'provincia' => 'required|string|max:100',
            'distrito' => 'required|string|max:100',
            'codigo_postal' => 'required|string|max:10',
            'telefono' => 'required|string|max:20',
        ]);

        $user = Auth::guard('user')->user(); // Obtener el usuario autenticado

        // Crear la dirección
        $direccion = new direcciones([
            'Nombre' => $request->Nombre,
            'direccion' => $request->direccion,
            'referencia' => $request->referencia,
            'departamento' => $request->departamento,
            'provincia' => $request->provincia,
            'distrito' => $request->distrito,
            'codigo_postal' => $request->codigo_postal,
            'telefono' => $request->telefono,
            'pais' => 'Perú',  // Asumimos que el país es Perú por defecto
        ]);

        // Relacionar la dirección con el usuario autenticado
        $user->direcciones()->save($direccion);

        return redirect()->route('misdirecciones')->with('success', 'Dirección creada exitosamente');
    }

    // Mostrar formulario para editar una dirección
    public function edit($id)
    {
        $user = Auth::guard('user')->user(); 
        $direccion = $user->direcciones()->findOrFail($id); 

        return view('users/direcciones-edit', compact('direccion'));
    }

    // Actualizar una dirección existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'referencia' => 'nullable|string|max:255',
            'departamento' => 'required|string|max:100',
            'provincia' => 'required|string|max:100',
            'distrito' => 'required|string|max:100',
            'codigo_postal' => 'required|string|max:10',
            'telefono' => 'required|string|max:20',
        ]);

        $user = Auth::guard('user')->user(); // Obtener el usuario autenticado
        $direccion = $user->direcciones()->findOrFail($id); // Obtener la dirección del usuario autenticado

        // Actualizar los campos de la dirección
        $direccion->update([
            'Nombre' => $request->Nombre,
            'direccion' => $request->direccion,
            'referencia' => $request->referencia,
            'departamento' => $request->departamento,
            'provincia' => $request->provincia,
            'distrito' => $request->distrito,
            'codigo_postal' => $request->codigo_postal,
            'telefono' => $request->telefono,
        ]);

        return redirect()->route('misdirecciones')->with('success', 'Dirección actualizada exitosamente');
    }

    // Eliminar una dirección
    public function destroy($id)
    {
        $user = Auth::guard('user')->user(); // Obtener el usuario autenticado
        $direccion = $user->direcciones()->findOrFail($id); // Obtener la dirección del usuario autenticado

        // Eliminar la dirección
        $direccion->delete();

        return redirect()->route('misdirecciones')->with('success', 'Dirección eliminada exitosamente');
    }
}
