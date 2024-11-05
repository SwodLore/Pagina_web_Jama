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
<body class="login">
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="{{ route('login.submit') }}" method="POST">
                @csrf 
                <h1>Iniciar Sesión</h1>
                <div class="social-container">
                    <a href="#" class="social">
                        <img src="{{ asset('img/facebook-color.svg') }}" alt="Facebook Icon">
                    </a>
                    <a href="#" class="social">
                        <img src="{{ asset('img/google.svg') }}" alt="Google Icon">
                    </a>
                </div>
                <span>o usa tu email</span>
                <input type="email" placeholder="Email" name="correo" required>
                <input type="password" placeholder="Password" name="contrasena" required>
                <a href="#">Olvidaste tu contraseña?</a>
                <button type="submit" class="ghost-naranja">Iniciar sesión</button>
            </form>
        </div>
        <div class="overlay-container">
                <div class="overlay-right">
                    <img src="{{ asset('img/Jama _sin _fondo.png') }}" alt="Logo JamaSports">
                    <div class="centrar">
                        <h2>Hola!!!</h2>
                        <p>Crear tu cuenta</p>
                        <button class="ghost" id="signUp"><a href="/register">Registrar</a></button>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>