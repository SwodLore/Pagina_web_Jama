<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthUserRequest;
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
        return view('users/register');
    }

    

    public function registerSubmit(){
        $user = User::create([
            'nombre' => request('nombre'),
            'apellido' => request('apellido'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'fecha_nacimiento' => request('fecha_nacimiento'),
            'DNI' => request('DNI'),
        ]);
        
        Auth::login($user);
        return redirect('/login');
    }

    public function login() {
        if(!auth()->guard('admin')->check()){
            return view('users/login');
        }
        return redirect()->route('micuenta');
    }
    
    public function auth(AuthUserRequest $request) {
        if($request->validated()){
            if(auth()->guard('user')->attempt([
                'email' => $request->email,
                'password' => $request->password,
            ])){
                $request->session()->regenerate();
                session()->flash('success', '¡Inicio de sesión exitoso! Bienvenido.');
                return redirect()->route('micuenta');
            }else{
                return redirect()->route('login.user')->withErrors(['error' => 'Credenciales incorrectas.'])
                ->withInput();
            }
        }
    }
    
    

    public function logout(){
        auth()->guard('user')->logout();
        return redirect()->route('home');
    }

}
