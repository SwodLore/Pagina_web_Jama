@extends('layouts.app')

@section('content')
    <div class="container" id="container">
        <div class="overlay-container">
            <div class="overlay-left">
                <img src="{{ asset('img/Jama _sin _fondo.png') }}" alt="Logo JamaSports">
                <div class="centrar">
                    
                    <h2>¡Bienvenido!</h2> 
                    <p>Inicia sesión con tu cuenta</p>
                    <button class="" id="signIn"><a href="/login">Inicia sesión</a></button>
                </div>
            </div>
        </div>
        <div class="form-container sign-up-container">
            <form action="{{route('register.submit')}}" method="POST">

                @csrf

                <h1>Crea tu Cuenta</h1>
                <div class="social-container">
                    <a href="#" class="social">
                        <i class="fab fa-facebook-f"><img src="{{ asset('img/facebook-color.svg') }}" alt="Facebook Icon"></i>
                    </a>
                    <a href="#" class="social">
                        <i class="fab fa-google" id="red"><img src="{{ asset('img/google.svg') }}" alt="Google Icon"></i>
                    </a>
                </div>
                    <span>o usa tu email como registro</span>
                    <input type="text" placeholder="Nombre" name="nombre" >
                    <input type="text" placeholder="Apellido" name="apellido" >
                    <input type="email" placeholder="Email" name="email" >
                    <input type="date" placeholder="Fecha de Nacimiento" name="fecha_nacimiento">
                    <input type="number" placeholder="DNI" name="DNI">
                    <input type="password" placeholder="Password" name="password" >
                    
                    <button type="submit" class="ghost-celeste" >Registrar</button>
            </form>
        </div>
    </div>
@endsection