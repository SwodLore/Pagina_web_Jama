@extends('layouts.trabajadores')

@section('content')

<main>
    <div class="modal-content">
        <span id="closeModalButton" class="close"><a href="/trabajadores/inventario">&times;</a></span>
        <h2>Editar Producto</h2>
        <form id="productForm" action="{{ route('inventario.update', $articulo->producto_id) }}" method="POST" enctype="multipart/form-data">
            
            @csrf
            @method('PUT') 
    
            <div class="form-modal">
                <div>
                    <img src="{{ asset('img/productos/' . $articulo->imagen) }}" alt="Producto" onerror="this.onerror=null; this.src='{{ asset('img/productos/adidas-modelo.webp') }}';">
    
                    <label for="imagen">Imagen:
                        <input type="file" id="imagen" name="imagen">
                    </label>
    
                    <label for="descripcion">Descripción:
                        <textarea id="descripcion" name="descripcion" rows="3" required>{{ $articulo->descripcion }}</textarea>
                    </label>
                </div>
                <div>
                    <label for="nombre">Nombre:
                        <input type="text" id="nombre" name="nombre" value="{{ $articulo->nombre }}" required>
                    </label>
    
                    <label for="marca">Marca:
                        <input type="text" id="marca" name="marca" value="{{ $articulo->marca }}" required>
                    </label>
    
                    <label for="codigo">Código:
                        <input type="text" id="codigo" name="codigo" value="{{ $articulo->codigo }}" required>
                    </label>
    
                    <label for="precio">Precio:
                        <input type="number" id="precio" name="precio" step="0.01" value="{{ $articulo->precio }}" required>
                    </label>
    
                    <label for="color">Color:
                        <input type="text" id="color" name="color" value="{{ $articulo->color }}" required>
                    </label>
    
                    <label for="talla">Talla:
                        <input type="number" id="talla" name="talla" step="1" value="{{ $articulo->talla }}" required>
                    </label>
                </div>
            </div>
            <button type="submit" class="submit-btn">Actualizar Producto</button>
        </form>
    </div>
    
</main>

@endsection