@extends('layouts.app')

@section('content')

<main>
    <div class="container-micuenta">
        <aside class="sidebar">
            <h2>Mi Cuenta</h2>
            <ul>
                <li><a href="/usuario/micuenta">Mi cuenta</a></li>
                <li><a href="/usuario/mipedido">Mis pedidos</a></li>
                <li><a href="/usuario/mifavorito">Mis favoritos</a></li>
                <li><a href="/usuario/misdirecciones">Libreta de direcciones</a></li>
                <li><a href="/usuario/informacionCuenta">Información de cuenta</a></li>
                <li><a href="/usuario/micarrito">Mi carrito</a></li>
                <li><a href="/usuario/mispagos">Mis medios de pago</a></li>
                <li><a onclick="document.getElementById('UserLogoutForm').submit();" href="#">Cerrar Sesión</a>
                    <form id="UserLogoutForm" action="{{ route('logout.user') }}" method="POST">
                        @csrf
                    </form></li>
            </ul>
        </aside>

        <div class="content">
            <h2>Actualizar Información de Cuenta</h2>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                <form action="{{ route('user.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nombre">Nombre <span class="required">*</span></label>
                        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $user->nombre) }}" required>
                    </div>
        
                    <div class="form-group">
                        <label for="apellido">Apellido <span class="required">*</span></label>
                        <input type="text" name="apellido" id="apellido" class="form-control" value="{{ old('apellido', $user->apellido) }}" required>
                    </div>
        
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" class="form-control" value="{{ $user->email }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="fecha_nacimiento">Fecha de Nacimiento <span class="required">*</span></label>
                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{ old('fecha_nacimiento', $user->fecha_nacimiento->toDateString()) }}" required>
                    </div>
        
                    <div class="form-group">
                        <label for="dni">Número de documento (DNI) <span class="required">*</span></label>
                        <input type="text" name="DNI" id="dni" class="form-control" value="{{ old('DNI', $user->DNI) }}" required>
                    </div>
        
                    <button type="submit" class="btn-submit">Guardar</button>
                </form>
            </div>

    </div>

</main>

@endsection
