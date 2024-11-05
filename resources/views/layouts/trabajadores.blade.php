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
        <img src="{{ asset('img/Jama.png') }}" alt="Logo de la tienda">
        <ul class="menu">
            <li><a href="/trabajadores">Inicio</a></li>
            <li><a href="/trabajadores/inventario">Inventario</a></li>
            <li><a href="/trabajadores/ventas">Publicar Ventas</a></li>
            <li><a href="/trabajadores/pedidos">Pedidos</a></li>
            <li><a href="/trabajadores/anuncio">Anuncios</a></li>
            <li><a href="/trabajadores/tienda">Tiendas</a></li>
            <li><a href="/logout">Cerrar Sesión</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header-admin">
            <h1>Dashboard Trabajador</h1>
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