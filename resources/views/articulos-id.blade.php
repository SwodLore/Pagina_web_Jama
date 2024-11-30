@extends('layouts.app')

@section('content')

<main>
    <div class="articulos-info">
        <div class="product-page">
        
            <div class="image-section">
                <div class="main-image">
                    <img src="{{ asset('img/productos/'.$inventario->producto->imagen) }}" alt="{{ $inventario->producto->marca->nombre.' '.$inventario->producto->nombre }}">
                </div>
            </div>
            
            <div class="details-section">
                <p class="sku">SKU: {{  $inventario->producto->codigo }}</p>
                <h1>{{ $inventario->producto->marca->nombre.' '.$inventario->producto->nombre }}</h1>
                <div class="price-section">
                    @php
                        $precioOriginal = $inventario->producto->precio;
                        $descuento = $inventario->producto->marca->descuento;
                        $precioConDescuento = $precioOriginal + ($precioOriginal * $descuento / 100);
                    @endphp

                    @if ($descuento > 0)
                        <p class="original-price">S/ {{ number_format($precioConDescuento, 2) }}</p>
                        <p class="current-price">S/ {{ number_format($precioOriginal, 2) }} <span class="discount">-{{ $descuento }}%</span></p>
                    @else
                        <p class="current-price">S/ {{ number_format($precioOriginal, 2) }}</p>
                    @endif

                </div>
                <p class="color">Color: {{ $inventario->producto->color }}</p>
                <select class="size-selector">
                    <option disabled selected>Elegir talla de Hombre</option>
                    @foreach ($tallasDisponibles as $talla)
                        <option>{{ $talla }}</option>
                    @endforeach
                </select>

                <div class="buttons">
                    <form action="{{ route('micarrito.create', $inventario->id) }}" method="POST">
                        @csrf
                    <button class="add-to-cart">Agregar al carrito</button>
                    </form>
                    <form>
                        <button class="size-guide"><a href="{{ route('tallas') }}">Guía de tallas</a></button>
                    </form>
                    <form action="{{ route('mifavorito.create', $inventario->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="add-to-favorite">
                            <img class="header-icon" src="{{ asset('img/favorito.svg') }}" alt="Favorito Icon">
                        </button>
                    </form>
                </div>
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                    <div class="alert alert-error">{{ session('error') }}</div>
                @endif
            </div>
        </div>
        
        <div class="info-section">
            <div class="characteristics">
            <h2>Características</h2>
            <p>Conoce las características principales del producto</p>
            <div class="characteristics-box">
                <p>MPN: {{ $inventario->producto->codigo }}</p>
                <p>Envío: Envíos a nivel nacional, precio de delivery no incluido</p>
                <p>Material: Textil-sintético</p>
                <p>Color: {{ $inventario->producto->color }}</p>
                <p>Taco: 1</p>
                <p>Género: {{ $inventario->producto->genero }}</p>
            </div>
            </div>
            <div class="categories">
            <h2>Categorías</h2>
            <p>Revisa nuestras categorías relacionadas</p>
            <ul>
                <li>Hombres > Zapatos > Deportivo > Running</li>
                <li>Deportes y aire libre > Deportes y ejercicio > Running > Calzado > Hombres</li>
                <li>Deportes y aire libre > Deportes y actividad física > Running > Calzado > Hombres</li>
            </ul>
            </div>
        </div>
        
        <div class="similar-products">
            <h2>Productos similares</h2>
            <p>¿Ya viste estos productos?</p>
            <div class="articulos-todos similar-products-list">
                @foreach ($articulosRelacionados as $articulosRelacionado)
                    <a class="card" href="/articulos/{{$articulosRelacionado->id}}">
                        <img src="{{ asset('img/productos/' . ($articulosRelacionado->imagen ?? 'default.webp')) }}" alt="Zapatillas">
                        @if ($articulosRelacionado->marca->descuento > 0)
                            <div class="discount white">-{{ $articulosRelacionado->marca->descuento }}%</div>
                        @endif
                        <div class="new">Nuevo</div>
                        <h3>{{ $articulosRelacionado->marca->nombre.' '.$articulosRelacionado->nombre }}</h3>
                        <p class="price">
                            S/ 
                            @php
                                $precioOriginal = $articulosRelacionado->precio;
                                $precioConDescuento = $precioOriginal + ($precioOriginal * $articulosRelacionado->marca->descuento / 100);
                            @endphp
                            <span>{{ number_format($precioOriginal, 2) }}</span> 
                            @if ($articulosRelacionado->marca->descuento > 0)
                                <del>S/ {{ number_format($precioConDescuento, 2) }}</del>
                            @endif
                        </p>
                    </a>
                @endforeach
            </div>
        </div>
        
        <div class="customer-comments">
            <h2>Comentarios de clientes</h2>
            <p>Comentarios de clientes que compraron este producto</p>
        </div>
    </div>
</main>

@endsection
