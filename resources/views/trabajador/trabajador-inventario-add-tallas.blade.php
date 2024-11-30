@extends('layouts.trabajadores')

@section('content')

<main>
    <div class="modal-content">
        <span id="closeModalButton" class="close"><a href="/trabajadores/inventario">&times;</a></span>
        <h2>Agregar Tallas y Cantidades</h2>
        @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-error">{{ session('error') }}</div>
        @endif
            <div class="form-modal-vista">
                <div>
                    <img src="{{ asset('img/productos/' . $producto->imagen) }}" alt="Producto"
                    onerror="this.onerror=null; this.src='{{ asset('img/productos/adidas-modelo.webp') }}';">
                    
                    <label>Descripcion:</label>
                    <p>{{ $producto->descripcion }}</p>
                    
                    <label>Color:</label>
                    <p>{{ $producto->color }}</p>
                </div>
                <div>
                    <label>Nombre:</label>
                    <p>{{ $producto->nombre }}</p>
                    
                    <label>Marca:</label>
                    <p>{{ $producto->marca->nombre ?? 'Sin marca' }}</p>
                    
                    <label>Código:</label>
                    <p>{{ $producto->codigo }}</p>
                    
                    <label>Precio:</label>
                    <p>S/ {{ number_format($producto->precio, 2) }}</p>
                    
                    <label>Agregar Tallas y Cantidades:</label>
                    <form method="POST" action="{{ route('inventario.store', $producto->id) }}" style="display: inline-block;">
                        @csrf
                        <label>Talla:</label>
                        <select name="talla_eur" class="form-control" required>
                            <option value="">Seleccione una talla</option>
                            @foreach ($tallas as $talla)
                                <option value="{{ $talla->id }}">
                                    {{ $talla->talla_eur }}
                                </option>
                            @endforeach
                        </select>
                        <label>Cantidad:</label>
                        <input type="number" name="cantidad" class="form-control" min="0" required>
                        <button type="submit" class="add-product-btn">Agregar</button>
                    </form>
                </div>
            </div>
            <div class="actions-vista">
                <button class="volver-btn"><a href="{{ route('inventario.create') }}">VOLVER</a></button>
            </div>
    </div>
    
</main>

@endsection