@extends('layouts.app')

@section('content')

<main>
    <div class="articulos-principal">
        <div class="articulos-filtro" id="filtersPanel">
            <h2>Filtrar y Ordenar</h2>
            <h3>Ordenar por:</h3>
            <select name="Odernar por" id="">
                <option value="">ULTIMOS PRODUCTOS</option>
                <option value="">Precio (DE MENOR A MAYOR)</option>
                <option value="">Precio (DE MAYOR A MENOR)</option>
            </select>
            <h3>Marca:</h3>
            <div class="brand-checkboxes">
                <label><input type="checkbox" name="Marca" value="Todas"> TODAS LAS MARCAS</label>
                <label><input type="checkbox" name="Marca" value="Adidas"> Adidas</label>
                <label><input type="checkbox" name="Marca" value="Nike"> Nike</label>
                <label><input type="checkbox" name="Marca" value="Puma"> Puma</label>
                <label><input type="checkbox" name="Marca" value="Reebok"> Reebok</label>
                <label><input type="checkbox" name="Marca" value="Cat"> Cat</label>
                <label><input type="checkbox" name="Marca" value="Jordan"> Jordan</label>
                <label><input type="checkbox" name="Marca" value="Under"> Under</label>
            </div>
            <h3>Talla:</h3>
            <table class="size-table">
                <thead>
                    <tr>
                        <th>Seleccionar Talla</th>
                        <th>Talla (EUR)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" name="talla[]" value="37"></td>
                        <td>37 EUR</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="talla[]" value="38"></td>
                        <td>38 EUR</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="talla[]" value="39"></td>
                        <td>39 EUR</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="talla[]" value="40"></td>
                        <td>40 EUR</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="talla[]" value="41"></td>
                        <td>41 EUR</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="talla[]" value="42"></td>
                        <td>42 EUR</td>
                    </tr>
                </tbody>
            </table>
            
            <h3>Precio:</h3>
            <div class="slider-wrapper">
                <label for="priceRange">Filtrar por Precio:</label>
                <input type="range" id="priceRange" name="priceRange" min="0" max="500" value="250">
                <span class="price-value">250</span>
            </div>
            <h3>Descuento:</h3>
            <select name="Descuento" id="">
                <option value="">TODOS LOS DESCUENTOS</option>
                <option value="">Sin descuento</option>
                <option value="">5% Descuento</option>
                <option value="">10% Descuento</option>
                <option value="">15% Descuento</option>
                <option value="">20% Descuento</option>
            </select>
            <h3>Color:</h3>
            <select name="Color" id="">
                <option value="">TODOS LOS COLORES</option>
                <option value="">ROJO</option>
                <option value="">AZUL</option>
                <option value="">VERDE</option>
                <option value="">NARANJA</option>
                <option value="">AMARILLO</option>
                <option value="">MARROMANO</option>
            </select>
        </div>

        <div class="articulos-list">
            <div class="articulos">
                <h1 class="articulos-title">Nuestros Productos</h1>
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
            </div>
        </div>
    </div>
</main>

@endsection