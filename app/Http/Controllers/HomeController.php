<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function tienda(){
        return view('tienda');
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

    public function login(){
        return view('login');
    }
}
