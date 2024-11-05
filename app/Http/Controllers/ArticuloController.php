<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function articulos(){
        $articulos = Articulo::all();
        return view('articulos', compact('articulos'));
    }

    public function articulosId($articulos_id){
        $articulo = Articulo::find($articulos_id);
        $articulos = Articulo::limit(3)->get();
        return view('articulos-id', compact('articulo', 'articulos'));
    }
    
}
