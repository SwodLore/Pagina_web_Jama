<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthAdminRequest;
use App\Models\Admin;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view('admin/admin-welcome');
    }

    public function admins(Request $request){
        $admins = Admin::paginate(10);
        return view('admin/admin-table', compact('admins'));
    }

    public function create(){
        return view('admin/admin-table-create');
    }

    public function edit($id){
        $admin = Admin::find($id);
        return view('admin/admin-table-edit', compact('admin'));
    }
    
    public function store(Request $request){
        $admin = new Admin;

        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'fecha_nacimiento' => 'required|date',
            'DNI' => 'required|string|max:255',
            'contrasena' => 'required|string|max:255',
        ]);

        $admin->nombre = $request->input('nombre');
        $admin->apellido = $request->input('apellido');
        $admin->correo = $request->input('correo');
        $admin->fecha_nacimiento = $request->input('fecha_nacimiento');
        $admin->DNI = $request->input('DNI');
        $admin->contrasena = $request->input('contrasena');
        $admin->save();
        return redirect('/admin/admin-table')->with('success', 'Admin guardado exitosamente');
    }
    public function destroy($id)
    {
        // Buscar el artículo por ID
        $admin = Admin::find($id);

        // Verificar si el artículo existe
        if (!$admin) {
            return redirect()->back()->with('error', 'Producto no encontrado.');
        }

        // Eliminar el artículo
        $admin->delete();
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
        ]);

        $admin= Admin::findOrFail($id);
        $admin->nombre = $request->input('nombre');
        $admin->apellido = $request->input('apellido');
        $admin->correo = $request->input('correo');
        $admin->fecha_nacimiento = $request->input('fecha_nacimiento');
        $admin->DNI = $request->input('DNI');
        $admin->contrasena = $request->input('contrasena');

        $admin->save();

        return redirect('/admin/admin-table')->with('success', 'Admin actualizado exitosamente');
    }
    public function showDetails($id)
    {
        // Obtener el producto por ID
        $admin = Admin::findOrFail($id); // Usamos findOrFail para manejar el caso de producto no encontrado
        
        // Retornar la vista de detalles del producto
        return view('admin/admin-table-ver', compact('admin'));
    }

    public function login(){
        if(!auth()->guard('admin')->check()){
            return view('admin/login-admin');
        }
        return redirect()->route('admin.vista');
    }
    
    public function auth(AuthAdminRequest $request){
        
        if($request->validated()){
            if(auth()->guard('admin')->attempt([
                'email' => $request->email,
                'password' => $request->password,
            ])){
                $request->session()->regenerate();
                session()->flash('success', '¡Inicio de sesión exitoso! Bienvenido.');
                return redirect()->route('admin.vista');
            }else{
                return redirect()->route('login.admin')->withErrors(['error' => 'Credenciales incorrectas.'])
                ->withInput();
            }
        }
    }

    public function logout(){
        auth()->guard('admin')->logout();
        return redirect()->route('login.admin');
    }
}
