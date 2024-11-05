@extends('layouts.trabajadores')

@section('content')

<main>
    <div class="modal-content">
        <span id="closeModalButton" class="close"><a href="/trabajadores/tienda">&times;</a></span>
        <h2>Editar Producto</h2>
        <form id="productForm" action="{{ route('tienda.update', $tienda->id) }}" method="POST" enctype="multipart/form-data">
            
            @csrf
            @method('PUT') 
    
            <div class="form-modal">
                <div>
                    <img src="{{ asset('img/productos/' . $tienda->imagen) }}" alt="Producto" onerror="this.onerror=null; this.src='{{ asset('img/tiendas/tienda1.png') }}';">
    
                    <label for="imagen">Imagen:
                        <input type="file" id="imagen" name="imagen">
                    </label>
                    
                    <label for="link">Link:
                        <input type="text" id="link" name="link" value="{{ $tienda->link }}" required>
                    </label>

                </div>
                <div>
                    <label for="calle">Calle:
                        <input type="text" id="calle" name="calle" value="{{ $tienda->calle }}" required>
                    </label>
        
                    <label for="numero">Numero:
                        <input type="number" id="numero" name="numero" step="1" value="{{ $tienda->numero }}" required>
                    </label>
        
                    <label for="distrito">Distrito:
                        <input type="text" id="distrito" name="distrito" value="{{ $tienda->distrito }}" required>
                    </label>
                    
                    <label for="provincia">Provincia:
                        <input type="text" id="provincia" name="provincia" value="{{ $tienda->provincia }}" required>
                    </label>

                    <label for="departamento">Departamento:
                        <input type="text" id="departamento" name="departamento" value="{{ $tienda->departamento }}" required>
                    </label>
                </div>
            </div>
            <button type="submit" class="submit-btn">Actualizar Producto</button>
        </form>
    </div>
    
</main>

@endsection