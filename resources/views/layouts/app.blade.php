<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Esta pagina web se trata de una tienda online de ventas de zapatillas en huancayo y poder enviar pedidos a otros lugares del peru.">
    <meta name="keywords" content="zapatillas,venta,huancayo,zapatillas en huancayo, peru, tienda de zapatillas, huancayo">
    <meta name="author" content="Alessandro Poves">
    <meta name="robots" content="index, follow">
    <meta name="title" content="Tienda Online de Zapatillas en Huancayo">

    <meta name="OG:title" content="Tienda Online de Zapatillas en Huancayo">
    <meta name="OG:description" content="Esta pagina web se trata de una tienda online de ventas de zapatillas en huancayo y poder enviar pedidos a otros lugares del peru.">

    <link rel="icon" href="{{ asset('img/Jama-Icon.png') }}" type="image/png">
    {{-- <link rel="stylesheet" href="{{ asset('build/css/app.css') }}"> --}}
    @vite('resources/css/app.scss')
    <title>Jama Sports</title>
</head>
<body>
    <header class="header">
        <div class="header-content">
            <div class="logo">
                <img src="{{ asset('img/Jama.png') }}" alt="Logo Jama Sports">
            </div>
            <div class="search">
                <input class="search-input" type="text" placeholder="Buscar">
            </div>
            <div class="header-nav">
                <nav class="nav-menu">
                    <ul class="nav-menu-list">
                        <li><a class="boton" href="#">Tiendas</a></li>
                        <li><a class="boton" href="#">Mi cuenta</a></li>
                        <li><a class="boton" href="#">Favorito</a></li>
                        <li><a class="boton" href="#">Carrito</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="header-menu">
            <ul class="header-menu-list">
                <li><a class="boton" href="#">Marcas</a></li>
                <li><a class="boton" href="#">Adidas</a></li>
                <li><a class="boton" href="#">Nike</a></li>
                <li><a class="boton" href="#">Puma</a></li>
                <li><a class="boton" href="#">Reebok</a></li>
                <li><a class="boton" href="#">Medidas/Tallas</a></li>
            </ul>
        </div>
    </header>

    @yield('content')

    <footer>
        <h2 class="footer-title">Jama Sports</h2>
        <div class="footer-content">
            <div>
                <h2 class="footer-subtitle">Contacto:</h2>
                <div class="footer-info">
                    <a href="#">+51 977 776 058</a>
                </div>
                
                <h2 class="footer-subtitle">Siguenos en:</h2>
                <div class="footer-info">
                    <a href="#">Facebook</a>
                    <a href="#">Instagram</a>
                    <a href="#">Tik Tok</a>
                </div>
            </div>
            <div>
                <h2 class="footer-subtitle">Información:</h2>
                <div class="footer-info">
                    <a href="#">Nosotros</a>
                    <a href="#">Tiendas</a>
                    <a href="#">Blog</a>
                </div>
            </div>

            <div>
                <h2 class="footer-subtitle">Política de Privacidad</h2>
                <div class="footer-info">
                    <a href="#">Términos y Condiciones</a>
                    <a href="#">Condiciones de Envío</a>
                    <a href="#">Políticas de Privacidad</a>
                    <a href="#">Libro de reclamaciones</a>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <h3>©<?php echo date('Y'); ?> Todos los derechos reservados.</h3>
        </div>
    </footer>
</body>
</html>