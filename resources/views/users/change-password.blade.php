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
            <h2>Cambiar Contraseña</h2>

            <form action="{{ route('user.changePassword') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="current_password">Contraseña Actual</label>
                    <input type="password" name="current_password" id="current_password" class="form-control" required>
                    @error('current_password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="new_password">Nueva Contraseña</label>
                    <input type="password" name="new_password" id="new_password" class="form-control" required>
                    @error('new_password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="new_password_confirmation">Confirmar Nueva Contraseña</label>
                    <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control" required>
                </div>

                <button type="submit" class="btn-submit">Actualizar Contraseña</button>
            </form>
        </div>
    </div>
</main>

@endsection