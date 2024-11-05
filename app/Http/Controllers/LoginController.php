<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Admin;
use App\Models\Trabajador;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    
    public function register(){
        return view('register');
    }

    public function login() {
        return view('login');
    }

    public function registerSubmit(){
        $user = User::create([
            'nombre' => request('nombre'),
            'apellido' => request('apellido'),
            'correo' => request('correo'),
            'contrasena' => Hash::make(request('contrasena')),
            'fecha_nacimiento' => request('fecha_nacimiento'),
            'DNI' => request('DNI'),
            'rol' => 'user'
        ]);
        
        Auth::login($user);
        return redirect('/admin');
    }

    public function loginSubmit(Request $request) {
        $request->validate([
            'correo' => 'required|email',
            'contrasena' => 'required'
        ]);
    
        // Autenticar como User
        $user = User::where('correo', $request->input('correo'))->first();
        if ($user && Hash::check($request->input('contrasena'), $user->contrasena)) {
            Auth::guard('user')->login($user);
            return redirect()->route('home');
        }
    
        // Autenticar como Trabajador
        $trabajador = Trabajador::where('correo', $request->input('correo'))->first();
        if ($trabajador && Hash::check($request->input('contrasena'), $trabajador->contrasena)) {
            Auth::guard('trabajador')->login($trabajador);
            return redirect()->route('trabajadores.vista');
        }
    
        // Autenticar como Admin
        $admin = Admin::where('correo', $request->input('correo'))->first();
        if ($admin && Hash::check($request->input('contrasena'), $admin->contrasena)) {
            Auth::guard('admin')->login($admin);
            return redirect()->route('admin.vista');
        }
    
        // Si no se encuentra en ninguna tabla
        return redirect()->route('login')->withErrors([
            'correo' => 'Las credenciales no coinciden o el usuario no existe.',
        ]);
    }
    
    

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
