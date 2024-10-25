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
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
            <h1>Crea tu Cuenta</h1>
            <div class="social-container">
                <a href="#" class="social>">
                    <i class="fab fa-facebook-f"><img src="{{ asset('img/facebook-color.svg') }}" alt="Facebook Icon"></i>
                </a>
                <a href="#" class="social>">
                    <i class="fab fa-google" id="red"><img src="{{ asset('img/google.svg') }}" alt="Google Icon"></i>
                </a>
            </div>
                <span>o usa tu email como registro</span>
                <input type="text" placeholder="Nombre" />
                <input type="text" placeholder="Apellido" />
                <input type="email" placeholder="Email" />
                <input type="date" placeholder="Fecha de Nacimiento">
                <input type="number" placeholder="DNI">
                <input type="password" placeholder="Password" />
                <input type="password" placeholder="Confirmar Password" />
                <button class="ghost" id="lila">Registrar</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                    <h1>Iniciar Sesión</h1>
                <div class="social-container">
                    <a href="#" class="social>">
                        <i class="fab fa-facebook-f"><img src="{{ asset('img/facebook-color.svg') }}" alt="Facebook Icon"></i>
                    </a>
                    <a href="#" class="social>">
                        <i class="fab fa-google" id="red"><img src="{{ asset('img/google.svg') }}" alt="Google Icon"></i>
                    </a>
                </div>
                    <span>o usa tu email</span>
                    <input type="email" placeholder="Email" />
                    <input type="password" placeholder="Password" />
                    <a href="#">Olvidaste tu contraseña?</a>
                    <button class="ghost-naranja" >Iniciar sesión</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <img src="{{ asset('img/Jama _sin _fondo.png') }}" alt="Logo JamaSports">
                    <h1>¡Bienvenido!</h1> 
                    
                    <p>
                        Inicia sesión con tu cuenta
                    </p>
                    <button class="ghost" id="signIn">Inicia sesión</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <img src="{{ asset('img/Jama _sin _fondo.png') }}" alt="Logo JamaSports">
                    <h1>Hola!!!</h1>
                    <p>Crear tu cuenta</p>
                    <button class="ghost" id="signUp">Registrar</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>