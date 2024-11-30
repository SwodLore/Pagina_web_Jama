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
            <section class="account-info">
                <h2>Información de cuenta</h2>
                <div class="card">
                    <h4>Información de contacto</h4>
                    <p>{{$user->nombre.' '.$user->apellido}}<br>{{$user->email}}</p>
                    <a href="{{ route('infocuenta')}}">Editar Usuario</a> | <a href="{{ route('user.changePasswordForm')}}">Cambiar contraseña</a>
                </div>
            </section>

            <section class="address-book">
                <h2>Libreta de direcciones</h2>
                @foreach ($direcciones as $direccion)
                <div class="card">
                    <h4>Dirección de envío predeterminada</h4>
                    <p>{{ $direccion->Nombre }}<br>{{ $direccion->direccion }}<br>{{ $direccion->provincia }}, {{ $direccion->departamento }}, {{ $direccion->distrito }}<br>{{ $direccion->pais }}<br>T: {{ $direccion->telefono }}</p>
                    <a href="{{ route('misdirecciones.edit', $direccion->id) }}" class="btn btn-warning">Editar dirección</a> | <form action="{{ route('misdirecciones.destroy', $direccion->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar esta dirección?')"><a>Eliminar dirección</a> </button>
                    </form>
                </div>
                @endforeach
                <a href="{{ route('misdirecciones')}}" class="manage-addresses">Administrar direcciones</a> 
            </section>
        </div>
    </div>

</main>

@endsection
