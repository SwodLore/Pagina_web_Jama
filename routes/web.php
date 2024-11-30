<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\CrearTrabajadoresController;
use App\Http\Controllers\DescuentoController;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\FavoritoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\TallaController;
use App\Http\Controllers\TiendasController;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\UsuarioController;
use App\Models\Descuento;
use App\Models\Marca;
use App\Models\Trabajador;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tienda', [HomeController::class, 'tienda']);
Route::get('/tallas', [HomeController::class, 'tallas'])->name('tallas');
Route::get('/nosotros', [HomeController::class, 'nosotros']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/terminos-y-condiciones', [HomeController::class, 'terminos_y_condiciones']);
Route::get('/condiciones-de-envio', [HomeController::class, 'condiciones_de_envio']);
Route::get('/politica-de-privacidad', [HomeController::class, 'politica_de_privacidad']);
Route::get('/libro-de-reclamaciones', [HomeController::class, 'libro_de_reclamaciones']);
Route::post('/libro-de-reclamaciones', [HomeController::class, 'libro_de_reclamaciones']);
Route::get('/articulos', [ArticuloController::class, 'articulos']);
Route::get('/articulos/{id}', [ArticuloController::class, 'articulosId']);

Route::get('/login', [LoginController::class, 'login'])->name('login.user');
Route::post('/auth', [LoginController::class, 'auth'])->name('user.auth');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'registerSubmit'])->name('register.submit');

Route::get('/trabajadores/login', [TrabajadorController::class, 'login'])->name('login.trabajador');
Route::post('/trabajadores/auth', [TrabajadorController::class, 'auth'])->name('trabajador.auth');

Route::get('/admin/login', [AdminController::class, 'login'])->name('login.admin');
Route::post('/admin/auth', [AdminController::class, 'auth'])->name('admin.auth');

Route::middleware('trabajador')->group(function () {
    Route::get('/trabajadores', [TrabajadorController::class, 'trabajadores'])->name('trabajadores.vista');

    Route::post('/trabajadores/logout', [TrabajadorController::class, 'logout'])->name('logout.trabajador');

    Route::get('/trabajadores/productos', [ArticuloController::class, 'productos'])->name('productos');
    Route::get('/trabajadores/productos/create', [ArticuloController::class, 'create'])->name('productos.create');
    Route::post('/trabajadores/productos', [ArticuloController::class, 'store'])->name('productos.store');
    Route::delete('/trabajadores/productos/{id}', [ArticuloController::class, 'destroy'])->name('productos.destroy');
    Route::get('/trabajadores/productos/{id}/edit', [ArticuloController::class, 'edit'])->name('productos.edit');
    Route::put('/trabajadores/productos/{id}', [ArticuloController::class, 'update'])->name('productos.update');
    Route::get('/trabajadores/productos/ver/{id}', [ArticuloController::class, 'showDetails'])->name('productos.showDetails');

    Route::get('/trabajadores/inventario', [TrabajadorController::class, 'inventario'])->name('inventario');
    Route::get('/trabajadores/inventario/create', [TrabajadorController::class, 'create'])->name('inventario.create');
    Route::post('/trabajadores/inventario/{id}', [TrabajadorController::class, 'store'])->name('inventario.store');
    Route::delete('/trabajadores/inventario/{id}', [TrabajadorController::class, 'destroy'])->name('inventario.destroy');
    Route::get('/trabajadores/inventario/{id}/edit', [TrabajadorController::class, 'edit'])->name('inventario.edit');
    Route::put('/trabajadores/inventario/{id}', [TrabajadorController::class, 'update'])->name('inventario.update');
    Route::get('/trabajadores/inventario/{id}/add', [TrabajadorController::class, 'add'])->name('inventario.add');
    Route::get('/trabajadores/inventario/{id}/addtallas', [ArticuloController::class, 'add'])->name('productos.addtallas');

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

    Route::get('/trabajadores/marcas', [MarcaController::class, 'marcas'])->name('marcas');
    Route::post('/trabajadores/marcas/create', [MarcaController::class, 'create'])->name('marcas.create');
    Route::delete('/trabajadores/marcas/{id}', [MarcaController::class, 'destroy'])->name('marcas.destroy');
    Route::get('/trabajadores/descuentos', [DescuentoController::class, 'descuentos'])->name('descuentos');
    Route::post('/trabajadores/descuentos/create', [DescuentoController::class, 'create'])->name('descuentos.create');
    Route::delete('/trabajadores/descuentos/{id}', [DescuentoController::class, 'destroy'])->name('descuentos.destroy');
    Route::get('/trabajadores/tallas', [TallaController::class, 'tallas'])->name('tallas.view');
    Route::post('/trabajadores/tallas/create', [TallaController::class, 'create'])->name('tallas.create');
    Route::delete('/trabajadores/tallas/{id}', [TallaController::class, 'destroy'])->name('tallas.destroy');

    Route::get('/trabajadores/pedidos', [TrabajadorController::class, 'pedidos'])->name('pedidos');

});
Route::middleware('admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin.vista');

    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('logout.admin');

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

});

Route::middleware('user')->group(function () {
    Route::get('/usuario/micuenta', [UsuarioController::class, 'micuenta'])->name('micuenta');

    Route::post('/usuario/logout', [LoginController::class, 'logout'])->name('logout.user');
    
    Route::get('/usuario/mipedido', [UsuarioController::class, 'mipedido'])->name('mipedido');
    Route::get('/usuario/mifavorito', [FavoritoController::class, 'mifavorito'])->name('mifavorito');
    Route::post('/usuario/mifavorito/{id}', [FavoritoController::class, 'create'])->name('mifavorito.create');
    Route::delete('/usuario/mifavorito/{id}', [FavoritoController::class, 'destroy'])->name('mifavorito.delete');
    Route::get('/usuario/misdirecciones', [UsuarioController::class, 'misdirecciones'])->name('misdirecciones');
    Route::get('/usuario/misdirecciones/create', [DireccionController::class, 'create'])->name('misdirecciones.create');
    Route::post('/usuario/misdirecciones', [DireccionController::class, 'store'])->name('misdirecciones.store');
    Route::delete('/usuario/misdirecciones/{id}', [DireccionController::class, 'destroy'])->name('misdirecciones.destroy');
    Route::get('/usuario/misdirecciones/{id}/edit', [DireccionController::class, 'edit'])->name('misdirecciones.edit');
    Route::put('/usuario/misdirecciones/{id}', [DireccionController::class, 'update'])->name('misdirecciones.update');
    Route::get('/usuario/informacionCuenta', [UsuarioController::class, 'infocuenta'])->name('infocuenta');
    Route::put('/usuario/infocuenta', [UsuarioController::class, 'update'])->name('user.update');
    Route::get('/usuario/micarrito', [CarritoController::class, 'micarrito'])->name('micarrito');
    Route::post('/usuario/micarrito/create/favorito/{inventario_id}', [CarritoController::class, 'createFromFavorito'])->name('micarrito.create.favorito');
    Route::post('/usuario/micarrito/create/{inventario_id}', [CarritoController::class, 'create'])->name('micarrito.create');
    Route::delete('/carrito/{inventario_id}', [CarritoController::class, 'destroy'])->name('micarrito.delete');
    Route::get('/usuario/mispagos', [UsuarioController::class, 'mispagos'])->name('mispagos');

    Route::get('/usuario/cambiar-contraseña', [UsuarioController::class, 'showChangePasswordForm'])->name('user.changePasswordForm');
    
    Route::put('/usuario/cambiar-contraseña', [UsuarioController::class, 'changePassword'])->name('user.changePassword');
});