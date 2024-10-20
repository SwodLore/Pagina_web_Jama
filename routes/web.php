<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/tienda', [HomeController::class, 'tienda']);
Route::get('/nosotros', [HomeController::class, 'nosotros']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/terminos-y-condiciones', [HomeController::class, 'terminos-y-condiciones']);
Route::get('/condiciones-de-envio', [HomeController::class, 'condiciones-de-envio']);
Route::get('/politica-de-privacidad', [HomeController::class, 'politica-de-privacidad']);
Route::get('/libro-de-reclamaciones', [HomeController::class, 'libro-de-reclamaciones']);


Route::get('/login', [HomeController::class, 'login']);

// ventanas
Route::get('login',function(){
    return "Este es el login";
});

Route::get('registro/{post}/{categoria?}',function($post , $categoria = null){
    return "Este es el registro {$post} y {$categoria}";
});





