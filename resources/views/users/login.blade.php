@extends('layouts.app')

@section('content')
<div class="login">
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="{{ route('user.auth') }}" method="POST">
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
                <a href="#">Olvidaste tu contraseña?</a>
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
                <button type="submit" class="ghost-naranja">Iniciar sesión</button>
            </form>
        </div>
        <div class="overlay-container">
                <div class="overlay-right">
                    <img src="{{ asset('img/Jama _sin _fondo.png') }}" alt="Logo JamaSports">
                    <div class="centrar">
                        <h2>Hola Bienvenido!!!</h2>
                        <p>Crea tu cuenta aqui</p>
                        <button class="ghost" id="signUp"><a href="/register">Registrar</a></button>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
