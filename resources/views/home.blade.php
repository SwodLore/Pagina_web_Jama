@extends('layouts.app')

@section('content')

<main>
    <div class="anuncios">
        <div class="anuncio anuncio1">
            <img src="{{ asset('img/Anuncio.webp') }}" alt="Anuncios">
        </div>
        <div class="anuncio anuncio2">
            <img src="{{ asset('img/Anuncio2.png') }}" alt="Anuncios">
        </div>
        <div class="anuncio anuncio3">
            <img src="{{ asset('img/Anuncio3.jpg') }}" alt="Anuncios">
        </div>
    </div>

    <div class="articulos">
        <h1>Nuestros Productos</h1>
        <div class="articulos-todos">
            @foreach ($articulos as $articulo)
                <a class="card" href="/articulos/{{$articulo->id}}">
                    <img src="{{ asset('img/productos/' . ($articulo->imagen ?? 'default.webp')) }}" alt="Zapatillas">
                    @if ($articulo->marca->descuento > 0)
                        <div class="discount">-{{ $articulo->marca->descuento }}%</div>
                    @endif
                    <div class="new">Nuevo</div>
                    <h3>{{ $articulo->marca->nombre.' '.$articulo->nombre }}</h3>
                    <p class="price">
                        S/ 
                        @php
                            $precioOriginal = $articulo->precio;
                            $precioConDescuento = $precioOriginal + ($precioOriginal * $articulo->marca->descuento / 100);
                        @endphp
                        <span>{{ number_format($precioOriginal, 2) }}</span> 
                        @if ($articulo->marca->descuento > 0)
                            <del>S/ {{ number_format($precioConDescuento, 2) }}</del>
                        @endif
                    </p>
                </a>
            @endforeach
        </div>
        <div>
            <a class="ver-todos" href="/articulos">Ver todos los productos</a>
        </div>
    </div>

    <div class="marcas-title">
        <h1>Nuestras Marcas</h1>
        <div class="marcas">
            <img src="{{ asset('img/logo-adidas.webp') }}" alt="logo adidas">
            <img src="{{ asset('img/logo-nike.webp') }}" alt="logo nike">
            <img src="{{ asset('img/logo-puma.jpg') }}" alt="logo puma">
            <img src="{{ asset('img/logo-reebok.jpg') }}" alt="logo reebok">
            <img src="{{ asset('img/logo-cat.jpg') }}" alt="logo cat">
            <img src="{{ asset('img/logo-jordan.jpg') }}" alt="logo jordan">
            <img src="{{ asset('img/logo-under.jpg') }}" alt="logo under">
        </div>
    </div>
    <div class="tiendas">
        <h2>Conoce nuestras</h2>
        <h1>Tiendas Fisicas</h1>
        <div class="tiendas-content">
            @foreach ( $tiendas as $tienda)
                <div class="tiendas-content-ubicacion">
                    <img src="{{ asset('img/tiendas/' . $tienda->imagen) }}" alt="Tienda">
                    <h3>Jama Sports {{$tienda->distrito}}</h3>
                    <p>{{$tienda->calle.' N° '.$tienda->numero.' '.$tienda->distrito}}</p>
                    <a href="{{$tienda->link}}" target="_blank">Ver tienda</a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="nosotros-caracteristicas">
        <div class="nosotros-caracteristicas-content">
            <img class="nosotros-icon" src="{{ asset('img/envio.svg') }}" alt="Envio Icon">
            <h2 class="nosotros-caracteristicas-title">Envio a domicilio</h2>
            <p>Enviamos a domicilio rápidamente.</p>
        </div>
        <div class="nosotros-caracteristicas-content">
            <img class="nosotros-icon" src="{{ asset('img/seguro.svg') }}" alt="seguro Icon">
            <h2 class="nosotros-caracteristicas-title">Compras Seguras</h2>
            <p>Pagos 100% seguros en cada compra.</p>
        </div>
        <div class="nosotros-caracteristicas-content">
            <img class="nosotros-icon" src="{{ asset('img/calidad.svg') }}" alt="Calidad Icon">
            <h2 class="nosotros-caracteristicas-title">Alta <span>Calidad</span></h2>
            <p>Zapatillas originales de marcas top.</p>
        </div>
        <div class="nosotros-caracteristicas-content">
            <img class="nosotros-icon" src="{{ asset('img/devolucion.svg') }}" alt="Devolucion Icon">
            <h2 class="nosotros-caracteristicas-title">Cambios y Devoluciones</h2>
            <p>Te ayudamos en lo que necesites.</p>
        </div>
    </div>
</main>

@endsection