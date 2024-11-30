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
            <h2>Mis favoritos</h2>
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                    <div class="alert alert-error">{{ session('error') }}</div>
                @endif
                    @if ($favoritos->isEmpty())
                        <div class="notification">
                            <span class="icon">ℹ️</span>
                            <span class="message">No tienes artículos en tus favoritos.</span>
                        </div>
                    @else
                <div class="articulos-todos">
                    
                        @foreach ($favoritos as $favorito)
                            @php $articulo = $favorito->inventario->producto; @endphp
                            <div class="favoritos">
                            <a class="card" href="/articulos/{{$articulo->id}}">
                                <img src="{{ asset('img/productos/' . ($articulo->imagen ?? 'default.webp')) }}" alt="Zapatillas">
                                @if ($articulo->marca->descuento > 0)
                                    <div class="discount">-{{ $articulo->marca->descuento }}%</div>
                                @endif
                                <div class="new">Nuevo</div>
                                <h3>{{ $articulo->marca->nombre . ' ' . $articulo->nombre .' ' . $articulo->modelo }} <b>{{'Talla: ' . $favorito->inventario->talla->talla_eur }}</b></h3>
                                <p class="price">
                                    S/ 
                                    @php
                                        $precioOriginal = $articulo->precio;
                                        $precioConDescuento = $precioOriginal - ($precioOriginal * $articulo->marca->descuento / 100);
                                    @endphp
                                    <span>{{ number_format($precioConDescuento, 2) }}</span> 
                                    @if ($articulo->marca->descuento > 0)
                                        <del>S/ {{ number_format($precioOriginal, 2) }}</del>
                                    @endif
                                </p>
                            </a>
                            
                            <div class="actions">
                                
                                <form action="{{ route('micarrito.create.favorito', $articulo->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-large">Agregar al carrito</button>
                                </form>

                                <form action="{{ route('mifavorito.delete', $favorito->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-small">
                                        <img src="{{ asset('img/trash.svg') }}" alt="Eliminar">
                                    </button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
            </section>
        </div>
        
    </div>

</main>

@endsection
