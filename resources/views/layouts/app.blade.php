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
    
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <title>Jama Sports</title>
</head>
<body>
    <header class="header">
        <div class="header-content">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('img/Jama.png') }}" alt="Logo Jama Sports">
                </a>
            </div>
            <div class="header-search">
                
                    <input class="search-input" type="text" placeholder="Buscar">
                    <img class="header-icon-search" src="{{ asset('img/lupa.svg') }}" alt="search Icon">
                
            </div>
            <div class="header-nav">
                <nav class="nav-menu">
                    <ul class="nav-menu-list">
                        <li><a class="boton" href="/tienda"><img class="header-icon" src="{{ asset('img/tienda.svg') }}" alt="Tiendas Icon">Tiendas</a></li>
                        <li>
                            @if (auth()->guard('user')->check())
                                <a class="boton" href="{{ route('micuenta') }}">
                                <img class="header-icon" src="{{ asset('img/mi_cuenta.svg') }}" alt="Mi cuenta Icon">Mi cuenta
                                </a>
                            @else
                                <a class="boton" href="{{ route('login.user') }}"><img class="header-icon" src="{{ asset('img/mi_cuenta.svg') }}" alt="Mi cuenta Icon">Iniciar Sesion
                                </a>
                            @endif 
                        </li>
                        <li><a class="boton" href="{{ route('mifavorito')}}"><img class="header-icon" src="{{ asset('img/favorito.svg') }}" alt="Favorito Icon"></a></li>
                        <li><a class="boton" href="{{ route('micarrito')}}"><img class="header-icon" src="{{ asset('img/carrito.svg') }}" alt="Carrito Icon"></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="header-menu">
            <div class="mobile-menu">
                <img src="{{ asset('img/barra.svg') }}" alt="icono menu resposive">
            </div>
            <nav class="header-menu-list">
                <a class="boton" href="#">Marcas</a>
                <a class="boton" href="#">Adidas</a>
                <a class="boton" href="#">Nike</a>
                <a class="boton" href="#">Puma</a>
                <a class="boton" href="#">Reebok</a>
                <a class="boton" href="{{ route('tallas') }}">Tallas</a>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer class="footer">
        <a href="https://wa.me/51977776058?text=Hola,%20tengo%20una%20consulta" class="whatsapp-button" target="_blank">
            <img class="footer-icon" src="{{ asset('img/WhatsApp-Icon.svg') }}" alt="WhatsApp">
        </a>
        <h2 class="footer-title">Jama <span class="footer-title-span">Sports</span></h2>
        <div class="footer-content">
            <div>
                <h2 class="footer-subtitle">Contacto:</h2>
                <div class="footer-info">
                    <a href="https://wa.me/51977776058?text=Hola,%20tengo%20una%20consulta" target="_blank">
                        <img class="footer-icon" src="{{ asset('img/WhatsApp-Icon.svg') }}" alt="WhatsApp Icon">
                        +51 977 776 058</a>
                        <a href="mailto:apovesmartinez@gmail.com" target="_blank">
                            <img class="footer-icon" src="{{ asset('img/mail.svg') }}" alt="Mail Icon">
                            apovesmartinez@gmail.com</a>
                </div>
                
            </div>
            <div>
                <h2 class="footer-subtitle">Siguenos en:</h2>
                <div class="footer-info">
                    <a href="https://www.facebook.com/profile.php?id=100064058949497" target="_blank"><img class="footer-icon" src="{{ asset('img/facebook.svg') }}" alt="Facebook Icon">Facebook</a>
                    <a href="https://www.instagram.com/jamasporthuancayo/?utm_source=ig_web_button_share_sheet" target="_blank"><img class="footer-icon" src="{{ asset('img/instagram.svg') }}" alt="Instagram Icon">Instagram</a>
                    <a href="https://www.tiktok.com/@jama.outlet?is_from_webapp=1&sender_device=pc" target="_blank"><img class="footer-icon" src="{{ asset('img/tiktok.svg') }}" alt="Tik Tok Icon">Tik Tok</a>
                </div>
            </div>
            <div>
                <h2 class="footer-subtitle">Información:</h2>
                <div class="footer-info">
                    <a href="/nosotros">Nosotros</a>
                    <a href="/tienda">Tiendas</a>
                    <a href="/blog">Blog</a>
                </div>
            </div>

            <div>
                <h2 class="footer-subtitle">Política de Privacidad</h2>
                <div class="footer-info">
                    <a href="/terminos-y-condiciones">Términos y Condiciones</a>
                    <a href="/condiciones-de-envio">Condiciones de Envío</a>
                    <a href="/politica-de-privacidad">Políticas de Privacidad</a>
                    <a href="/libro-de-reclamaciones">Libro de reclamaciones</a>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="footer-pay">
                <img class="footer-icon" src="{{ asset('img/visa.svg') }}" alt="Visa Icon">
                <img class="footer-icon" src="{{ asset('img/mastercard.svg') }}" alt="Mastercard Icon">
                <img class="footer-icon" src="{{ asset('img/paypal.svg') }}" alt="Paypal Icon">
            </div>
            <h3>©<?php echo date('Y'); ?> Todos los derechos reservados.</h3>
        </div>
    </footer>
</body>
</html>