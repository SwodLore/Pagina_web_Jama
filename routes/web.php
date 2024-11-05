<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\CrearTrabajadoresController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TiendasController;
use App\Http\Controllers\TrabajadorController;
use App\Http\Middleware\RedirectIfAuthenticatedByRole;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tienda', [HomeController::class, 'tienda']);
Route::get('/nosotros', [HomeController::class, 'nosotros']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/terminos-y-condiciones', [HomeController::class, 'terminos_y_condiciones']);
Route::get('/condiciones-de-envio', [HomeController::class, 'condiciones_de_envio']);
Route::get('/politica-de-privacidad', [HomeController::class, 'politica_de_privacidad']);
Route::get('/libro-de-reclamaciones', [HomeController::class, 'libro_de_reclamaciones']);
Route::post('/libro-de-reclamaciones', [HomeController::class, 'libro_de_reclamaciones']);
Route::get('/articulos', [ArticuloController::class, 'articulos']);
Route::get('/articulos/{id}', [ArticuloController::class, 'articulosId']);

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');
Route::post('/register', [LoginController::class, 'registerSubmit'])->name('register.submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/trabajadores', [TrabajadorController::class, 'trabajadores'])->name('trabajadores.vista');
Route::get('/trabajadores/inventario', [TrabajadorController::class, 'inventario'])->name('inventario');
Route::get('/trabajadores/inventario/create', [TrabajadorController::class, 'create'])->name('inventario.create');
Route::post('/trabajadores/inventario', [TrabajadorController::class, 'store'])->name('inventario.store');
Route::delete('/trabajadores/inventario/{id}', [TrabajadorController::class, 'destroy'])->name('inventario.destroy');
Route::get('/trabajadores/inventario/{id}/edit', [TrabajadorController::class, 'edit'])->name('inventario.edit');
Route::put('/trabajadores/inventario/{id}', [TrabajadorController::class, 'update'])->name('inventario.update');
Route::get('/trabajadores/inventario/ver/{id}', [TrabajadorController::class, 'showDetails'])->name('inventario.showDetails');

Route::get('/trabajadores/tienda', [TiendasController::class, 'tiendas'])->name('tienda');
Route::get('/trabajadores/tienda/create', [TiendasController::class, 'create'])->name('tienda.create');
Route::post('/trabajadores/tienda', [TiendasController::class, 'store'])->name('tienda.store');
Route::delete('/trabajadores/tienda/{id}', [TiendasController::class, 'destroy'])->name('tienda.destroy');
Route::get('/trabajadores/tienda/{id}/edit', [TiendasController::class, 'edit'])->name('tienda.edit');
Route::put('/trabajadores/tienda/{id}', [TiendasController::class, 'update'])->name('tienda.update');
Route::get('/trabajadores/tienda/ver/{id}', [TiendasController::class, 'showDetails'])->name('tienda.showDetails');

Route::get('/trabajadores/anuncio', [AnuncioController::class, 'anuncios'])->name('anuncio');
Route::get('/trabajadores/anuncio/create', [AnuncioController::class, 'create'])->name('anuncio.create');
Route::post('/trabajadores/anuncio', [AnuncioController::class, 'store'])->name('anuncio.store');
Route::delete('/trabajadores/anuncio/{id}', [AnuncioController::class, 'destroy'])->name('anuncio.destroy');
Route::get('/trabajadores/anuncio/ver/{id}', [AnuncioController::class, 'showDetails'])->name('anuncio.showDetails');

Route::get('/trabajadores/ventas', [TrabajadorController::class, 'ventas'])->name('ventas');
Route::get('/trabajadores/pedidos', [TrabajadorController::class, 'pedidos'])->name('pedidos');




    Route::get('/admin', [AdminController::class, 'admin'])->name('admin.vista');

    Route::get('/admin/trabajadores', [CrearTrabajadoresController::class, 'adminTrabajador'])->name('admin.trabajadores');
    Route::get('/admin/trabajadores/create', [CrearTrabajadoresController::class, 'create'])->name('admin.trabajadores.create');
    Route::post('/admin/trabajadores', [CrearTrabajadoresController::class, 'store'])->name('admin.trabajadores.store');
    Route::delete('/admin/trabajadores/{id}', [CrearTrabajadoresController::class, 'destroy'])->name('admin.trabajadores.destroy');
    Route::get('/admin/trabajadores/{id}/edit', [CrearTrabajadoresController::class, 'edit'])->name('admin.trabajadores.edit');
    Route::put('/admin/trabajadores/{id}', [CrearTrabajadoresController::class, 'update'])->name('admin.trabajadores.update');
    Route::get('/admin/trabajadores/ver/{id}', [CrearTrabajadoresController::class, 'showDetails'])->name('admin.trabajadores.showDetails');

    Route::get('/admin/admin', [AdminController::class, 'admins'])->name('admin.admin');
    Route::get('/admin/admin/create', [AdminController::class, 'create'])->name('admin.admin.create');
    Route::post('/admin/admin', [AdminController::class, 'store'])->name('admin.admin.store');
    Route::delete('/admin/admin/{id}', [AdminController::class, 'destroy'])->name('admin.admin.destroy');
    Route::get('/admin/admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.admin.edit');
    Route::put('/admin/admin/{id}', [AdminController::class, 'update'])->name('admin.admin.update');
    Route::get('/admin/admin/ver/{id}', [AdminController::class, 'showDetails'])->name('admin.admin.showDetails');

    Route::get('/admin/reportes-compras', [AdminController::class, 'reportes_compras'])->name('reportes_compras');
    Route::get('/admin/reportes-ventas', [AdminController::class, 'reportes_ventas'])->name('reportes_ventas');
    Route::get('/admin/reportes-inventario', [AdminController::class, 'reportes_inventario'])->name('reportes_inventario');

Route::middleware(['auth', RedirectIfAuthenticatedByRole::class])->group(function () {
});


