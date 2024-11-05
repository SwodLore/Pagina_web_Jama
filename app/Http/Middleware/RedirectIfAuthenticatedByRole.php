<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticatedByRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response {
        $guards = ['admin', 'trabajador', 'user'];
        
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::guard($guard)->user();
                // Solo redirige si no está en la ruta correspondiente
                switch ($user->rol) {
                    case 3:
                        if (!$request->routeIs('admin.*')) {
                            return redirect()->route('admin.vista');
                        }
                        break;
                    case 2:
                        if (!$request->routeIs('trabajadores.*')) {
                            return redirect()->route('trabajadores.vista');
                        }
                        break;
                    case 1:
                        if (!$request->routeIs('home.*')) {
                            return redirect()->route('home');
                        }
                        break;
                }
            }
        }
    
        return $next($request);
    }
    
}
