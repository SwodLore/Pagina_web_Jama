<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use Illuminate\Http\Request;

class CrearTrabajadoresController extends Controller
{
    public function adminTrabajador(Request $request){
        $trabajadores = Trabajador::paginate(10);
        return view('admin/trabajadores-table', compact('trabajadores'));
    }

    public function create(){
        return view('admin/trabajadores-table-create');
    }

    public function edit($id){
        $trabajador = Trabajador::find($id);
        return view('admin/trabajadores-table-edit', compact('trabajador'));
    }
    
    public function store(Request $request){
        $trabajadores = new Trabajador;

        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'fecha_nacimiento' => 'required|date',
            'DNI' => 'required|string|max:255',
            'contrasena' => 'required|string|max:255',
            'salario' => 'required|numeric|min:1',
            'departamento' => 'required|string|max:255',
        ]);

        $trabajadores->nombre = $request->input('nombre');
        $trabajadores->apellido = $request->input('apellido');
        $trabajadores->correo = $request->input('correo');
        $trabajadores->fecha_nacimiento = $request->input('fecha_nacimiento');
        $trabajadores->DNI = $request->input('DNI');
        $trabajadores->contrasena = $request->input('contrasena');
        $trabajadores->salario = $request->input('salario');
        $trabajadores->departamento = $request->input('departamento');
        $trabajadores->save();
        return redirect('/admin/trabajadores-table')->with('success', 'Trabajador guardado exitosamente');
    }
    public function destroy($id)
    {
        // Buscar el artículo por ID
        $trabajadores = Trabajador::find($id);

        // Verificar si el artículo existe
        if (!$trabajadores) {
            return redirect()->back()->with('error', 'Producto no encontrado.');
        }

        // Eliminar el artículo
        $trabajadores->delete();
        return redirect()->back()->with('success', 'Producto eliminado exitosamente.');
    }

    public function update(Request $request, $id)
    {   

        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'fecha_nacimiento' => 'required|date',
            'DNI' => 'required|string|max:255',
            'contrasena' => 'required|string|max:255',
            'salario' => 'required|numeric|min:1',
            'departamento' => 'required|string|max:255',
        ]);

        $trabajadores= Trabajador::findOrFail($id);
        $trabajadores->nombre = $request->input('nombre');
        $trabajadores->apellido = $request->input('apellido');
        $trabajadores->correo = $request->input('correo');
        $trabajadores->fecha_nacimiento = $request->input('fecha_nacimiento');
        $trabajadores->DNI = $request->input('DNI');
        $trabajadores->contrasena = $request->input('contrasena');
        $trabajadores->salario = $request->input('salario');
        $trabajadores->departamento = $request->input('departamento');

        $trabajadores->save();

        return redirect('/admin/trabajadores-table')->with('success', 'Trabajador actualizado exitosamente');
    }
    public function showDetails($id)
    {
        // Obtener el producto por ID
        $trabajador = Trabajador::findOrFail($id); // Usamos findOrFail para manejar el caso de producto no encontrado
        
        // Retornar la vista de detalles del producto
        return view('admin/trabajadores-table-ver', compact('trabajador'));
    }

}
