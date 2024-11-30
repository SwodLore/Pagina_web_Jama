<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\carrito;
use App\Models\favorito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    public function micarrito(Request $request)
    {
        // Obtener el usuario autenticado
        $user = Auth::guard('user')->user();

        // Verificar si el usuario está autenticado
        if (!$user) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para ver tu carrito.');
        }

        // Obtener los productos en el carrito del usuario, ignorando cantidad
        $carritoItems = $user->carrito()->with('inventario.producto.marca')->get();

        // Verificar si hay productos en el carrito
        if ($carritoItems->isEmpty()) {
            return view('users/micarrito', [
                'mensaje' => 'No tienes productos en tu carrito.',
                'carritoItems' => $carritoItems,
                'subtotal' => 0,
                'descuentoTotal' => 0,
                'total' => 0,
                'costoEnvio' => 0,
                'totalConEnvio' => 0,
            ]);
        }

        $subtotal = 0;
        $descuentoTotal = 0;

        // Calcular el subtotal basado solo en el precio de los productos (sin cantidad)
        foreach ($carritoItems as $carrito) {
            $producto = $carrito->inventario->producto;
            $precio = $producto->precio;

            // Asegúrate de que el precio no sea nulo
            if ($precio > 0) {
                $subtotal += $precio;
                
                // Calcular el descuento (si aplica)
                $descuento = $producto->marca->descuento ?? 0;
                $descuentoTotal += ($precio * $descuento / 100);
            }
        }

        // Total después de aplicar el descuento
        $total = $subtotal - $descuentoTotal;

        // Costo de envío fijo (puedes ajustarlo según sea necesario)
        $costoEnvio = 20;

        // Total final con envío
        $totalConEnvio = $total + $costoEnvio;

        // Pasar los datos a la vista
        return view('users/micarrito', compact('carritoItems', 'subtotal', 'descuentoTotal', 'total', 'costoEnvio', 'totalConEnvio'));
    }


    public function createFromFavorito($inventario_id)
    {
        
        $user = Auth::guard('user')->user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para agregar al carrito.');
        }

        $carrito = Carrito::where('user_id', $user->id)
                        ->where('inventario_id', $inventario_id)
                        ->first();

        if (!$carrito) {
            Carrito::create([
                'user_id' => $user->id,
                'inventario_id' => $inventario_id,
            ]);
        }

        Favorito::where('user_id', $user->id)
                ->where('inventario_id', $inventario_id)
                ->delete();

        return redirect()->back()->with('success', 'Producto movido al carrito y eliminado de favoritos.');
    }


    public function create($inventario_id)
    {
        
        $user = Auth::guard('user')->user();
        
        if (!$user) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para agregar al carrito.');
        }
        
        $carrito = Carrito::where('user_id', $user->id)
                        ->where('inventario_id', $inventario_id)
                        ->first();

        if (!$carrito) {
            Carrito::create([
                'user_id' => $user->id,
                'inventario_id' => $inventario_id,
            ]);
        }

        return back()->with('success', 'Producto agregado al carrito');
    }

    public function destroy($inventario_id)
    {
        // Obtener el usuario autenticado
        $user = Auth::guard('user')->user();

        // Verificar si el usuario está autenticado
        if (!$user) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para eliminar del carrito.');
        }

        // Buscar el carrito relacionado con el usuario y el inventario
        $carrito = Carrito::where('user_id', $user->id)
                        ->where('inventario_id', $inventario_id)
                        ->first();

        // Si el carrito no existe, redirigir con error
        if (!$carrito) {
            return back()->with('error', 'El producto no está en el carrito.');
        }

        // Eliminar el carrito
        $carrito->delete();

        // Redirigir de vuelta con un mensaje de éxito
        return redirect()->back()->with('success', 'Artículo eliminado de tu carrito.');
    }


}
