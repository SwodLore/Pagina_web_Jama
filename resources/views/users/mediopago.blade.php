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
            <div class="notification">
                <span class="icon">ℹ️</span>
                <span class="message">No tienes metodo de pagos agregados</span>
            </div>
        </div>
    </div>

</main>

@endsection
