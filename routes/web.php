<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

// ventanas
Route::get('login',function(){
    return "Este es el login";
});

Route::get('registro/{post}/{categoria?}',function($post , $categoria = null){
    return "Este es el registro {$post} y {$categoria}";
});





