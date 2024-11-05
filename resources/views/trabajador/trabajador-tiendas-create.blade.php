@extends('layouts.trabajadores')

@section('content')

<main>
    <div class="modal-content">
        <span id="closeModalButton" class="close"><a href="/trabajadores/tienda">&times;</a></span>
            <h2>Agregar Nuevo Producto</h2>
            <form id="productForm" action="{{ route('tienda.store') }}" method="POST" enctype="multipart/form-data">
                
                @csrf

                <div class="form-modal">
                    <div>
                        <img src="{{ asset('img/productos/adidas-modelo.webp') }}" alt="Producto">

                        <label for="imagen">Imagen:
                            <input type="file" id="imagen" name="imagen" required>
                        </label>

                        <label for="link">Link:
                            <input type="text" id="link" name="link" required>
                        </label>
                    </div>
                    <div>
                        <label for="calle">Calle:
                            <input type="text" id="calle" name="calle" required>
                        </label>
            
                        <label for="numero">Numero:
                            <input type="number" id="numero" name="numero" step="1" required>
                        </label>
            
                        <label for="distrito">Distrito:
                            <input type="text" id="distrito" name="distrito" required>
                        </label>
                        
                        <label for="provincia">Provincia:
                            <input type="text" id="provincia" name="provincia" required>
                        </label>

                        <label for="departamento">Departamento:
                            <input type="text" id="departamento" name="departamento" required>
                        </label>
                        
                    </div>
                </div>

                <button type="submit" class="submit-btn">Guardar Tienda</button>
                
            </form>
        </div>
</main>

@endsection