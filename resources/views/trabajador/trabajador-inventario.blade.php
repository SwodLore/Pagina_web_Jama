@extends('layouts.trabajadores')

@section('content')

<main>
    <div class="filter-container">
        <form method="GET" action="{{ route('inventario') }}">
            <div class="filter-options">
                <label for="filter-by">Filtrar por:</label>
                <select name="filter" id="filter-by">
                    <option value="nombre" {{ request('filter') == 'nombre' ? 'selected' : '' }}>Nombre</option>
                    <option value="marca" {{ request('filter') == 'marca' ? 'selected' : '' }}>Marca</option>
                    <option value="codigo" {{ request('filter') == 'codigo' ? 'selected' : '' }}>Código</option>
                    <option value="color" {{ request('filter') == 'color' ? 'selected' : '' }}>Color</option>
                    <option value="precio" {{ request('filter') == 'precio' ? 'selected' : '' }}>Precio</option>
                    <option value="talla" {{ request('filter') == 'talla' ? 'selected' : '' }}>Talla</option>
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
        @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                    <div class="alert alert-error">{{ session('error') }}</div>
                @endif
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
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inventarios as $producto_id => $inventariosPorProducto)
                @php
                    $producto = $inventariosPorProducto->first()->producto;
                @endphp
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->marca->nombre }}</td>
                    <td>{{ $producto->codigo }}</td>
                    <td><img src="{{ asset('img/productos/' . $producto->imagen) }}" alt="Producto"></td>
                    <td>{{ $producto->color }}</td>
                    <td>S/. {{ $producto->precio }}</td>
                    <td>
                        @foreach ($inventariosPorProducto as $inventario)
                            <div>
                                Talla: {{ $inventario->talla->talla_eur ?? 'N/A' }} EUR - Cantidad: {{ $inventario->cantidad }}
                            </div>
                        @endforeach
                    </td>
                    <td class="actions">
                        <button class="view-btn">
                            <a href="{{ route('inventario.edit', ['id' => $inventariosPorProducto->first()->id]) }}" class="view-btn">Editar</a>
                        </button>

                        <button class="edit-btn">
                            <a href="{{ route('inventario.add', $inventariosPorProducto->first()->id) }}">Agregar Tallas</a>
                        </button>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</main>

@endsection