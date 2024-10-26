@extends('layouts.app')

@section('content')

<main>
    <div class="articulos-info">
        <div>
            <a href="/articulos" class="volver">Volver</a>
            <div class="articulos-info-especifico">
                <div class="articulos-imagen">
                    <img src="{{ asset('img/adidas-modelo.webp') }}" alt="foto zapatillas">
                </div>
                <div class="articulos-info-comprar">
                    <h2>Zapatillas Marca: <span>Adidas</span></h2>
                    <h3>Precio: <span class="precio">S/. 160.00</span></h3>
                    <h3>Cupon: <input type="text" placeholder="Cupon"></h3>
                    <h3>Color: <span>Negro</span></h3>
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
                            <a href="/articulos/1" class="articulo-info">
                                <img src="{{ asset('img/adidas-modelo.webp') }}" alt="foto zapatillas">
                                <div class="articulos-info-content">
                                    <h2>Adidas</h2>
                                    <h3>Zapatillas adidas Hombre Outdoor Tracefinder |<span>IE5906</span></h3>
                                    <h3>Precio: <span>S/. 160.00</span></h3>
                                    <h3>Talla: <span>37 EUR</span></h3>
                                    <p>Envio Gratis</p>
                                </div>
                            </a>
                            <a href="/articulos/2" class="articulo-info">
                                <img src="{{ asset('img/adidas-modelo.webp') }}" alt="foto zapatillas">
                                <div class="articulos-info-content">
                                    <h2>Adidas</h2>
                                    <h3>Zapatillas adidas Hombre Outdoor Tracefinder |<span>IE5906</span></h3>
                                    <h3>Precio: <span>S/. 160.00</span></h3>
                                    <h3>Talla: <span>37 EUR</span></h3>
                                    <p>Envio Gratis</p>
                                </div>
                            </a>
                            <a href="/articulos/3" class="articulo-info">
                                <img src="{{ asset('img/adidas-modelo.webp') }}" alt="foto zapatillas">
                                <div class="articulos-info-content">
                                    <h2>Adidas</h2>
                                    <h3>Zapatillas adidas Hombre Outdoor Tracefinder |<span>IE5906</span></h3>
                                    <h3>Precio: <span>S/. 160.00</span></h3>
                                    <h3>Talla: <span>37 EUR</span></h3>
                                    <p>Envio Gratis</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="articulos-info-opiniones">
                    <h2>Zapatillas Marca: <span>Adidas</span></h2>
                    <p>Zapatillas de alta calidad y diseño. Con una amplia gama de estilos y colores, Adidas ofrece una variedad de zapatillas para todos los estilos de deportes. Ofrecemos zapatillas de alta velocidad, resistencia, fuerza y agilidad, así como zapatillas de resistencia y fuerza para aquellos que buscan una zapatilla más robusta.</p>
                    <h2>Opiniones:</h2>
                    
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
