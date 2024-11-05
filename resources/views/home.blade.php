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
            @foreach ( $articulos as $articulo)
                <a href="/articulos/{{$articulo->producto_id}}" class="articulo-info">
                <img src="{{ asset('img/productos/' . $articulo->imagen) }}" alt="foto zapatillas">
                    <div class="articulos-info-content">
                        <h2>{{$articulo->marca}}</h2>
                        <h3>{{$articulo->nombre}} |<span>{{$articulo->codigo}}</span></h3>
                        <h3>Precio: <span>S/. {{$articulo->precio}}</span></h3>
                        <h3>Talla: <span>{{$articulo->talla}} EUR</span></h3>
                        <p>Envio Gratis</p>
                    </div>
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
            <div class="tiendas-content-ubicacion">
                <img src="{{ asset('img/tienda1.png') }}" alt="Tienda 1 Jama Sports Huancayo">
                <h3>Jama Sports Huancayo</h3>
                <p>Prolongacion Huanuco 275 Huancayo - En la galeria San Francisco de Asis</p>
                <a href="https://maps.app.goo.gl/KZ1V6tUu6u6MudqZ8" target="_blank">Ver tienda</a>
            </div>
            <div class="tiendas-content-ubicacion">
                <img src="{{ asset('img/tienda2.png') }}" alt="Tienda 1 Jama Sports Huancayo">
                <h3>Jama Sports Huancayo El tambo</h3>
                <p>Mariscal Castilla N 1114 - El tambo Huancayo</p>
                <a href="https://maps.app.goo.gl/NeGGzM3W1aYFfTL3A" target="_blank">Ver tienda</a>
            </div>
            <div class="tiendas-content-ubicacion">
                <img src="{{ asset('img/tienda3.png') }}" alt="Tienda 1 Jama Sports Huancayo">
                <h3>Jama Sport Chilca</h3>
                <p>Av 9 de Diciembre N 518 - Chilca Huancayo</p>
                <a href="https://maps.app.goo.gl/fEgWiEUHxZa2xFGs6" target="_blank">Ver tienda</a>
            </div>
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