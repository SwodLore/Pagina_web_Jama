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
    
        <button class="add-product-btn"><a href="{{ route('productos.create') }}">Agregar Producto</a></button>
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
                    <th>Genero</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articulos as $articulo)
                <tr>
                    <td>{{ $articulo->id }}</td>
                    <td>{{ $articulo->nombre }}</td>
                    <td>{{ $articulo->marca->nombre}}</td>
                    <td>{{ $articulo->codigo}}</td>
                    <td><img src="{{ asset('img/productos/' . $articulo->imagen) }}" alt="Producto"></td>
                    <td>{{$articulo->color}}</td>
                    <td>S/. {{$articulo->precio}}</td>
                    <td>{{ $articulo->genero }}</td>
                    <td class="actions">
                        <button class="view-btn">
                            <a href="{{ route('productos.showDetails', ['id' => $articulo->id]) }}" class="view-btn">Ver</a>
                        </button>

                        <button class="edit-btn"><a href="{{ route('productos.edit', $articulo->id) }}">Editar</a></button>

                        <form action="{{ route('productos.destroy', $articulo->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este producto?');">
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