<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// ventanas
Route::get('login',function(){
    return view("Este es el login");
});

