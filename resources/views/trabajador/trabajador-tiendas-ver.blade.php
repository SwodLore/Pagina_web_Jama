@extends('layouts.trabajadores')

@section('content')

<main>
    <div class="modal-content">
        <span id="closeModalButton" class="close"><a href="/trabajadores/tienda">&times;</a></span>
        <h2>Vista Producto</h2>
    
            <div class="form-modal-vista">
                <div>
                    <img src="{{ asset('img/tiendas/' . $tienda->imagen) }}" alt="Producto" onerror="this.onerror=null; this.src='{{ asset('img/tiendas/tienda1.png') }}';">
    
    
                    <label for="link">Link:</label>
                    <p>{{ $tienda->link }}</p>
                </div>
                <div>
                    <label>Calle:</label>
                    <p>{{ $tienda->calle }}</p>
                    
                    <label>Numero:</label>
                    <p>{{ $tienda->numero }}</p>
                    
                    <label>Distrito:</label>
                    <p>{{ $tienda->distrito }}</p>
                    
                    <label>Provincia:</label>
                    <p>{{ $tienda->provincia }}</p>
                    
                    <label>Departamento:</label>
                    <p>{{ $tienda->departamento }}</p>
                </div>
            </div>
            <div class="actions-vista">
                <button class="edit-btn"><a href="{{ route('tienda.edit', $tienda->id) }}">Editar</a></button>

                <form action="{{ route('tienda.destroy', $tienda->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta tienda?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn">Eliminar</button>
                </form>
            </div>
    </div>
</main>

@endsection