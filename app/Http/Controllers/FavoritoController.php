<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\favorito;
use App\Models\Inventario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoritoController extends Controller
{
    public function mifavorito(Request $request)
    {
        $user = Auth::guard('user')->user();
        $favoritos = $user->favoritos()->with('inventario.producto.marca')->get();
        return view('users/mifavorito', compact('favoritos'));
    }
    
    public function create($id)
    {
        // Obtener el usuario autenticado
        $user = Auth::guard('user')->user();

        // Verificar si el usuario está autenticado
        if (!$user) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para agregar a favoritos.');
        }

        // Verificar si el inventario existe
        $inventario = Inventario::find($id);
        if (!$inventario) {
            return redirect()->back()->with('error', 'Producto no encontrado en el inventario.');
        }

        // Verificar si el producto ya está en los favoritos del usuario
        $favoritoExistente = Favorito::where('user_id', $user->id)
                                    ->where('inventario_id', $inventario->id) // Relacionar con inventario_id
                                    ->exists();

        if ($favoritoExistente) {
            return redirect()->back()->with('info', 'Este producto ya está en tus favoritos.');
        }

        // Agregar el producto a los favoritos
        Favorito::create([
            'user_id' => $user->id,
            'inventario_id' => $inventario->id, // Asignar correctamente el inventario_id
        ]);

        // Redirigir con mensaje de éxito
        return redirect()->back()->with('success', 'Producto agregado a favoritos.');
    }


    public function destroy($id)
        {
            // Verificar si el usuario está autenticado
            $user = Auth::guard('user')->user();

            if (!$user) {
                return redirect()->route('login')->with('error', 'Debes iniciar sesión para realizar esta acción.');
            }

            // Buscar el favorito
            $favorito = Favorito::where('id', $id)->where('user_id', $user->id)->first();

            if (!$favorito) {
                return redirect()->back()->with('error', 'El favorito no existe o no tienes permiso para eliminarlo.');
            }

            // Eliminar el favorito
            $favorito->delete();

            return redirect()->back()->with('success', 'Artículo eliminado de tus favoritos.');
        }
}
