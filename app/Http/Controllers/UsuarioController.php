<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function micuenta()
    {
        $user = Auth::guard('user')->user();
        $direcciones = $user->direcciones()->limit(2)->get();
        return view('users/micuenta' ,compact('user','direcciones'));
    }

    public function mipedido(Request $request)
    {
        return view('users/mipedido');
    }

    public function misdirecciones(Request $request)
    {
        $user = Auth::guard('user')->user();
        $direcciones = $user->direcciones()->get();
        return view('users/misdirecciones',compact('direcciones'));
    }
    public function infocuenta(Request $request)
    {
        $user = Auth::guard('user')->user();
        return view('users/infocuenta',compact('user'));
    }
    
    public function mispagos(Request $request)
    {
        return view('users/mediopago');
    }

    public function update(Request $request)
    {
        $user = Auth::guard('user')->user();

        // Validación de los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'DNI' => 'required|string|max:8',
        ]);

        $user->update([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'DNI' => $request->DNI,
        ]);

        return redirect()->route('infocuenta')->with('success', 'Información de cuenta actualizada correctamente.');
    }

    public function showChangePasswordForm()
{
    return view('users/change-password'); 
}

public function changePassword(Request $request)
{
    $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|string|min:8|confirmed',
    ]);

    $user = Auth::guard('user')->user();

    if (!Hash::check($request->current_password, $user->password)) {
        return back()->withErrors(['current_password' => 'La contraseña actual es incorrecta']);
    }

    $user->password = Hash::make($request->new_password);
    $user->save();

    return redirect()->route('infocuenta')->with('success', 'Contraseña actualizada exitosamente');
}

}
