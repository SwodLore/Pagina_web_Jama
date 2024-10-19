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

    <link rel="icon" href="../../img/Jama-Icon.png" type="image/png">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Jama Sports</title>
</head>
<body>
    <header>
        <div>
            <div>
                <img src="../../img/Jama-Icon.png" alt="logo">
            </div>
            <div>
                <input type="text" placeholder="Buscar">
            </div>
            <div>
                <nav>
                    <ul>
                        <li><a href="#">Tiendas</a></li>
                        <li><a href="#">Mi cuenta</a></li>
                        <li><a href="#">Favorito</a></li>
                        <li><a href="#">Carrito</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div>
            <ul>
                <li><a href="#">Marcas</a></li>
                <li><a href="#">Adidas</a></li>
                <li><a href="#">Nike</a></li>
                <li><a href="#">Puma</a></li>
                <li><a href="#">Reebok</a></li>
                <li><a href="#">Medidas/Tallas</a></li>
            </ul>
        </div>
    </header>

    @yield('content')

    <footer>
        <h1>Jama Sports</h1>
        <div>
            <div>
                <h2>Contacto:</h2>
                <a href="#">+51 977 776 058</a>
                <h2>Siguenos en:</h2>
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">Tik Tok</a>
            </div>
            <div>
                <h2>Información:</h2>
                <a href="#">Nosotros</a>
                <a href="#">Tiendas</a>
                <a href="#">Blog</a>
            </div>

            <div>
                <h2>Política de Privacidad</h2>
                <a href="#">Términos y Condiciones</a>
                <a href="#">Condiciones de Envío</a>
                <a href="#">Políticas de Privacidad</a>
                <a href="#">Libro de reclamaciones</a>
            </div>
        </div>
        <div>
            <h3>©<?php echo date('Y'); ?> Todos los derechos reservados.</h3>
        </div>
    </footer>
</body>
</html>