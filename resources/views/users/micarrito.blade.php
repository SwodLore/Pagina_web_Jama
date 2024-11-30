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
            @if ($carritoItems->isEmpty())
                <div class="cart-empty-container">
                    <h2>Carrito</h2>
                    <div class="empty-cart-content">
                    <div class="empty-cart-icon">
                        <img src="{{ asset('img/carrito-negro.svg') }}" alt="Carrito vacío">
                    </div>
                    <div class="empty-cart-message">
                        <p>Tu carrito está vacío</p>
                        <p>Parece que todavía no has agregado productos a tu carrito.</p>
                    </div>
                    <div class="buttons-container">
                        <button class="shop-btn"><a href="{{ route('home') }}">IR A COMPRAR</a></button>
                        <button class="favorites-btn"><a href="{{ route('mifavorito') }}">IR A FAVORITOS</a></button>
                    </div>
                    </div>
                </div>
            @else
            <div class="content carrito">
            <section class="account-info">
            <div class="cart-container">
                <h1>Carrito</h1>
                <div class="cart-content">
                    <div>
                        @foreach ($carritoItems as $carrito)
                        @php
                            $articulo = $carrito->inventario->producto;
                        @endphp
                            <div class="product-card">
                                <img src="{{ asset('img/productos/' . ($articulo->imagen ?? 'default.webp')) }}" alt="{{ $articulo->nombre }}" class="product-image">
                                <div class="product-details">
                                    <h3>{{ $articulo->marca->nombre }}</h3>
                                    <p>{{ $articulo->nombre }}</p>
                                    <p>Color: {{ $articulo->color }}</p>
                                    <p>Talla: {{ $carrito->inventario->talla->talla_eur }}</p>
                                    @if ($carrito->inventario->cantidad > 0)
                                        <div class="quantity-selector">
                                            <label for="quantity">Cantidad:</label>
                                            <select id="quantity" class="quantity-dropdown">
                                                @for ($i = 1; $i <= $carrito->inventario->cantidad; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    @else
                                        <p>Agotado</p>
                                    @endif
                                </div>
                                <div class="product-pricing">
                                    <p class="discount-price">
                                        S/ 
                                        @php
                                            $precioOriginal = $articulo->precio;
                                            $precioConDescuento = $precioOriginal - ($precioOriginal * $articulo->marca->descuento / 100);
                                        @endphp
                                        {{ number_format($precioConDescuento, 2) }}
                                    </p>
                                    <p class="original-price">S/ {{ number_format($precioOriginal, 2) }}</p>
                                    <form action="{{ route('micarrito.delete', $carrito->inventario_id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-btn">🗑️</button>
                                    </form>
                                </div>
                            </div>
                            @endforeach
                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            @if(session('error'))
                                <div class="alert alert-error">{{ session('error') }}</div>
                            @endif
                    </div>

                        <div class="cart-summary">
                            <p>Subtotal: <span>S/ {{ number_format($subtotal, 2) }}</span></p>
                            <p>Descuento: <span>S/ -{{ number_format($descuentoTotal, 2) }}</span></p>
                            <p>Costo de envío: <span>S/ {{ number_format($costoEnvio, 2) }}</span></p>
                            <p class="total-price">Total: <span>S/ {{ number_format($totalConEnvio, 2) }}</span></p>
                            <button class="continue-btn">CONTINUAR</button>
                        </div>
                    </div>
                </div>
            </section>
            @endif
        </div>
    </div>

</main>

@endsection
