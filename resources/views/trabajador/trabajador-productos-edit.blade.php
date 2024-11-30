@extends('layouts.trabajadores')

@section('content')

<main>
    <div class="modal-content">
        <span id="closeModalButton" class="close"><a href="/trabajadores/productos">&times;</a></span>
        <h2>Editar Producto</h2>
        <form id="productForm" action="{{ route('productos.update', $articulo->id) }}" method="POST" enctype="multipart/form-data">
            
            @csrf
            @method('PUT') 
    
            <div class="form-modal">
                <div>
                    <img src="{{ asset('img/productos/' . $articulo->imagen) }}" alt="Producto"
                    onerror="this.onerror=null; this.src='{{ asset('img/productos/adidas-modelo.webp') }}';">
    
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
    
                    <label for="marca">Marca:</label>
                    <select id="marca" name="marca_id" required>
                        @foreach ($marcas as $marca)
                            <option value="{{ $marca->id }}" {{ $marca->id == $articulo->marca_id ? 'selected' : '' }}>
                                {{ $marca->nombre }}
                            </option>
                        @endforeach
                    </select>
    
                    <label for="codigo">Código:
                        <input type="text" id="codigo" name="codigo" value="{{ $articulo->codigo }}" required>
                    </label>
    
                    <label for="precio">Precio:
                        <input type="number" id="precio" name="precio" step="0.01" value="{{ $articulo->precio }}" required>
                    </label>
    
                    <label for="color">Color:
                        <input type="text" id="color" name="color" value="{{ $articulo->color }}" required>
                    </label>

                    <label for="genero">Género:</label>
                    <select id="genero" name="genero" required>
                        <option value="M" {{ $articulo->genero == 'M' ? 'selected' : '' }}>Masculino</option>
                        <option value="F" {{ $articulo->genero == 'F' ? 'selected' : '' }}>Femenino</option>
                    </select>
                </div>
            </div>
            @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <button type="submit" class="submit-btn">Actualizar Producto</button>
        </form>
    </div>
    
</main>

@endsection