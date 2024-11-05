@extends('layouts.trabajadores')

@section('content')

<main>
    <div class="modal-content">
        <span id="closeModalButton" class="close"><a href="/trabajadores/inventario">&times;</a></span>
            <h2>Agregar Nuevo Producto</h2>
            <form id="productForm" action="{{ route('inventario.store') }}" method="POST" enctype="multipart/form-data">
                
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
            
                        <label for="marca">Marca:
                            <input type="text" id="marca" name="marca" required>
                        </label>
            
                        <label for="codigo">Código:
                            <input type="text" id="codigo" name="codigo" required>
                        </label>
    
                        <label for="precio">Precio:
                            <input type="number" id="precio" name="precio" step="1" required>
                        </label>
            
                        <label for="color">Color:
                            <input type="text" id="color" name="color" required>
                        </label>                    
            
                        <label for="talla">Talla:</label>
                        <input type="number" id="talla" name="talla" step="1" required>
                    </div>
                </div>
                <button type="submit" class="submit-btn">Guardar Producto</button>
            </form>
        </div>
</main>

@endsection