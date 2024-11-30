<!DOCTYPE html>
<html lang="es">
<head>
	<title>Trabajadores</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" href="{{ asset('img/Jama-Icon.png') }}" type="image/png">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="trabajadores">
    <div class="sidebar">
        <div class="logo">@ Jama Sports</div>
        <a href="/">
            <img src="{{ asset('img/Jama.png') }}" alt="Logo Jama Sports">
        </a>
        <ul class="menu">
            <li><a href="/trabajadores">Inicio</a></li>
            <li><a href="{{ route('productos') }}">Productos</a></li>
            <li><a href="{{ route('inventario') }}">Inventario</a></li>
            <li><a href="/trabajadores/pedidos">Pedidos</a></li>
            <li><a href="{{route('marcas')}}">Marcas</a></li>
            <li><a href="{{route('tallas.view')}}">Tallas</a></li>
            <li><a href="{{route('descuentos')}}">Cupones</a></li>
            <li><a href="/trabajadores/anuncio">Anuncios</a></li>
            <li><a href="/trabajadores/tienda">Tiendas</a></li>
            <li><a onclick="document.getElementById('TrabajadorLogoutForm').submit();" href="#">Cerrar Sesión</a>
                <form id="TrabajadorLogoutForm" action="{{ route('logout.trabajador') }}" method="POST">
                    @csrf
                </form></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header-admin">
            <h1><span class="welcome">Bienvenido {{ auth()->guard('trabajador')->user()->nombre.' ' }}</span> Dashboard Trabajador</h1>
            <div class="profile">
                <span class="notification">🔔 2</span>
                <span class="profile-name">Renee McKelvey</span>
                <span class="profile-role">Product Manager</span>
            </div>
        </div>
        
            @yield('content')
        
    </div>
</body>
</html>