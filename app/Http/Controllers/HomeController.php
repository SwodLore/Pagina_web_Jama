<?php

namespace App\Http\Controllers;

use App\Models\Anuncio;
use App\Models\Articulo;
use App\Models\Inventario;
use App\Models\Talla;
use App\Models\Tienda;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $anuncios = Anuncio::limit(3)->get();
        $articulos = Articulo::with(['marca:id,nombre,descuento'])
        ->limit(4)
        ->get();
        $tiendas = Tienda::limit(3)->get();
        return view('home', compact('articulos','tiendas','anuncios'));
    }
    public function tienda(){
        $tiendas = Tienda::limit(3)->get();
        return view('tienda', compact('tiendas'));
    }
    public function tallas(){
        $tallas = Talla::all();
        return view('tallas', compact('tallas'));
    }
    public function nosotros(){
        return view('nosotros');
    }
    public function blog(){
        return view('blog');
    }

    public function terminos_y_condiciones(){
        return view('terminos-y-condiciones');
    }
    public function condiciones_de_envio(){
        return view('condiciones-de-envio');
    }
    public function politica_de_privacidad(){
        return view('politica-de-privacidad');
    }
    public function libro_de_reclamaciones(){
        return view('libro-de-reclamaciones');
    }

}
