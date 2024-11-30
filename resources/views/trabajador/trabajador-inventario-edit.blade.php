@extends('layouts.trabajadores')

@section('content')

<main>
    <div class="modal-content">
        <span id="closeModalButton" class="close"><a href="/trabajadores/inventario">&times;</a></span>
        <h2>Vista Producto</h2>
        @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-error">{{ session('error') }}</div>
        @endif
            <div class="form-modal-vista">
                <div>
                    <img src="{{ asset('img/productos/' . $inventarios->first()->producto->imagen) }}" alt="Producto"
                    onerror="this.onerror=null; this.src='{{ asset('img/productos/adidas-modelo.webp') }}';">
                    
                    <label>Nombre:</label>
                    <p>{{ $inventarios->first()->producto->nombre }}</p>
                    
                    <label>Marca:</label>
                    <p>{{ $inventarios->first()->producto->marca->nombre ?? 'Sin marca' }}</p>
                    
                    <label>Código:</label>
                    <p>{{ $inventarios->first()->producto->codigo }}</p>
                    
                    <label>Precio:</label>
                    <p>S/ {{ number_format($inventarios->first()->producto->precio, 2) }}</p>
                    
                    <label>Color:</label>
                    <p>{{ $inventarios->first()->producto->color }}</p>
                </div>
                <div>
                    
                    <label>Tallas y Cantidades:</label>
                    @foreach ($inventarios as $inventario)
                        <div class="update-tallas">
                            
                            <form method="POST" action="{{ route('inventario.update', $inventario->id) }}" style="display: inline-block;">
                                @csrf
                                @method('PUT')
                                <div class="update-tallas-form">
                                    <label>Talla:</label>
                                    <select name="talla_eur" class="form-control" required>
                                        @foreach ($tallas as $talla)
                                            <option value="{{ $talla->id }}" 
                                                @if ($inventario->talla && $inventario->talla->id == $talla->id) selected @endif>
                                                {{ $talla->talla_eur }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label>Cantidad:</label>
                                    <input type="number" name="cantidad" value="{{ $inventario->cantidad }}" class="form-control" min="0" required>
                                </div>
                                <button type="submit" class="edit-btn">Actualizar</button>
                            </form>

                            <form method="POST" action="{{ route('inventario.destroy', $inventario->id) }}" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn">Eliminar</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="actions-vista">
                <button class="edit-btn"><a href="{{ route('inventario.add', $inventario->id) }}">Agregar Tallas</a></button>
                <button class="volver-btn"><a href="{{ route('inventario') }}">Volver</a></button>
            </div>
    </div>
</main>

@endsection