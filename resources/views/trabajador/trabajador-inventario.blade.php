@extends('layouts.trabajadores')

@section('content')

<main>
    <div class="filter-container">
        <form method="GET" action="{{ route('inventario') }}">
            <div class="filter-options">
                <label for="filter-by">Filtrar por:</label>
                <select name="filter" id="filter-by">
                    <option value="nombre">Nombre</option>
                    <option value="marca">Marca</option>
                    <option value="codigo">Código</option>
                    <option value="color">Color</option>
                    <option value="precio">Precio</option>
                    <option value="talla">Talla</option>
                </select>
            </div>
        
            <div class="search-bar">
                <input type="text" id="search-input" placeholder="Buscar..." value="{{ request('search') }}">
                <button id="search-btn">Buscar</button>
            </div>
        </form>
    
        <button class="add-product-btn"><a href="{{ route('inventario.create') }}">Agregar Producto</a></button>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Producto ID</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Código</th>
                    <th>Imagen</th>
                    <th>Color</th>
                    <th>Precio</th>
                    <th>Talla</th>
                    <th>Fecha Creación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $articulos as $articulo)
                <tr>
                    <td>{{$articulo->producto_id}}</td>
                    <td>{{$articulo->nombre}}</td>
                    <td>{{$articulo->marca}}</td>
                    <td>{{$articulo->codigo}}</td>
                    <td><img src="{{ asset('img/productos/' . $articulo->imagen) }}" alt="Producto"></td>
                    <td>{{$articulo->color}}</td>
                    <td>S/. {{$articulo->precio}}</td>
                    <td>{{$articulo->talla}} EUR</td>
                    <td>{{$articulo->created_at}}</td>
                    <td class="actions">
                        <button class="view-btn"><a href="{{ route('inventario.showDetails', ['id' => $articulo->producto_id]) }}" class="view-btn">Ver</a></button>

                        <button class="edit-btn"><a href="{{ route('inventario.edit', $articulo->producto_id) }}">Editar</a></button>

                        <form action="{{ route('inventario.destroy', $articulo->producto_id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este producto?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="pagination-container">
        {{ $articulos->links() }}
    </div>
</main>

@endsection