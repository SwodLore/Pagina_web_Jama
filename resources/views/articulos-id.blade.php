@extends('layouts.app')

@section('content')

<main>
    <div class="articulos-info">
        <div>
            <a href="/articulos" class="volver">Volver</a>
            <div class="articulos-info-especifico">
                <div class="articulos-imagen">
                    <img src="{{ asset('img/productos/' . $articulo->imagen) }}" alt="foto zapatillas">
                </div>
                <div class="articulos-info-comprar">
                    <h2>Zapatilla Marca: <span>{{$articulo->marca}}</span></h2>
                    <h2>Codigo: <span>{{$articulo->codigo}}</span></h2>
                    <h3>Precio: <span class="precio">S/. {{$articulo->precio}}</span></h3>
                    <h3>Cupon: <input type="text" placeholder="Cupon"></h3>
                    <h3>Color: <span>{{$articulo->color}}</span></h3>
                    <div class="tallas">
                        <select name="Talla" id="">
                            <option value="">37 EUR</option>
                            <option value="">38 EUR</option>
                            <option value="">39 EUR</option>
                            <option value="">40 EUR</option>
                            <option value="">41 EUR</option>
                            <option value="">42 EUR</option>
                        </select>
                        <a href="#">Guia de Tallas</a>
                    </div>
                        <p>Envio Gratis</p>
                    <div class="botones">
                        <button class="boton-comprar">Comprar Ahora</button>
                        <button class="boton-agregar">Agregar al carrito</button>
                    </div>
                </div>
                <div class="articulos-info-mas">
                    <div class="articulos">
                        <h1>Mas Productos</h1>
                        <div class="articulos-todos">
                            @foreach ( $articulos as $article)
                            <a href="/articulos/{{$article->producto_id}}" class="articulo-info">
                                <img src="{{ asset('img/adidas-modelo.webp') }}" alt="foto zapatillas">
                                <div class="articulos-info-content">
                                    <h2>{{$article->marca}}</h2>
                                    <h3>{{$article->nombre}} |<span>{{$article->codigo}}</span></h3>
                                    <h3>Precio: <span>S/. {{$article->precio}}</span></h3>
                                    <h3>Talla: <span>{{$article->talla}} EUR</span></h3>
                                    <p>Envio Gratis</p>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="articulos-info-opiniones">
                    <h2>Zapatilla Marca: <span>{{$articulo->marca}}</span></h2>
                    <p>{{$articulo->descripcion}}</p>
                    <h2>Opiniones:</h2>
                    
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
