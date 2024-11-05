@extends('layouts.trabajadores')

@section('content')

<main>
    <div class="modal-content">
        <span id="closeModalButton" class="close"><a href="/trabajadores/inventario">&times;</a></span>
        <h2>Vista Producto</h2>
    
            <div class="form-modal-vista">
                <div>
                    <img src="{{ asset('img/productos/' . $articulo->imagen) }}" alt="Producto" onerror="this.onerror=null; this.src='{{ asset('img/productos/adidas-modelo.webp') }}';">
    
    
                    <label for="descripcion">Descripción:</label>
                    <p>{{ $articulo->descripcion }}</p>
                </div>
                <div>
                    <label>Nombre:</label>
                    <p>{{ $articulo->nombre }}</p>
                    
                    <label>Marca:</label>
                    <p>{{ $articulo->marca }}</p>
                    
                    <label>Código:</label>
                    <p>{{ $articulo->codigo }}</p>
                    
                    <label>Precio:</label>
                    <p>S/ {{ number_format($articulo->precio, 2) }}</p>
                    
                    <label>Color:</label>
                    <p>{{ $articulo->color }}</p>
                    
                    <label>Talla:</label>
                    <p>{{ $articulo->talla }}</p>
                </div>
            </div>
            <div class="actions-vista">
                <button class="edit-btn"><a href="{{ route('inventario.edit', $articulo->producto_id) }}">Editar</a></button>

                <form action="{{ route('inventario.destroy', $articulo->producto_id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este producto?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn">Eliminar</button>
                </form>
            </div>
    </div>
</main>

@endsection