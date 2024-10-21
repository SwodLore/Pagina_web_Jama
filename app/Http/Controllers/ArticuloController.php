<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function articulos(){
        return view('articulos');
    }

    public function articulosId(){
        return view('arituclos-id');
    }
}
