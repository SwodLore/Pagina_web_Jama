<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="{{ asset('img/Jama-Icon.png') }}" type="image/png">
    
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <title>Jama Sports</title>
</head>
<body class="login">
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="{{ route('trabajador.auth') }}" method="POST">
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
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <button type="submit" class="ghost-celeste">Iniciar sesión</button>
            </form>
        </div>
        <div class="overlay-container">
                <div class="overlay-left">
                    <a href="/">
                        <img src="{{ asset('img/Jama _sin _fondo.png') }}" alt="Logo JamaSports">
                    </a>
                    <div class="centrar">
                        <h2>Hola!!!</h2>
                        <p>Bienvenido a login de trabajadores</p>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>