@extends('layouts.trabajadores')

@section('content')

<main>
    <div class="modal-content">
        <span id="closeModalButton" class="close"><a href="/trabajadores/productos">&times;</a></span>
            <h2>Agregar Nuevo Producto</h2>
            <form id="productForm" action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
                
                @csrf

                <div class="form-modal">
                    <div>
                        <img src="{{ asset('img/productos/adidas-modelo.webp') }}" alt="Producto">

                        <label for="imagen">Imagen:
                            <input type="file" id="imagen" name="imagen" required>
                        </label>

                        <label for="descripcion">Descripción:
                            <textarea id="descripcion" name="descripcion" rows="3" required></textarea>
                        </label>
                    </div>
                    <div>
                        <label for="nombre">Nombre:
                            <input type="text" id="nombre" name="nombre" required>
                        </label>
            
                        <label for="marca">Marca:</label>
                        <select id="marca" name="marca_id" required>
                            @foreach ($marcas as $marca)
                                <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                            @endforeach
                        </select>
            
                        <label for="codigo">Código:
                            <input type="text" id="codigo" name="codigo" required>
                        </label>
    
                        <label for="precio">Precio:
                            <input type="number" id="precio" name="precio" step="1" required>
                        </label>
            
                        <label for="color">Color:
                            <input type="text" id="color" name="color" required>
                        </label>          
                        
                        <label for="genero">Género:</label>
                        <select id="genero" name="genero" required>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
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
                <button type="submit" class="submit-btn">Guardar Producto</button>
            </form>
        </div>
</main>

@endsection