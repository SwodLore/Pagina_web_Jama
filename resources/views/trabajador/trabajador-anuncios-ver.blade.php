@extends('layouts.trabajadores')

@section('content')

<main>
    <div class="modal-content">
        <span id="closeModalButton" class="close"><a href="/trabajadores/anuncio">&times;</a></span>
        <h2>Vista Anuncio</h2>
    
            <div class="form-modal-vista">
                <div>
                    <img src="{{ asset('img/anuncios/' . $anuncios->imagen) }}" alt="Producto" onerror="this.onerror=null; this.src='{{ asset('img/anuncios/Anuncio2.png') }}';">

                </div>
                <div>
                    <label>Nombre:</label>
                    <p>{{ $anuncios->nombre }}</p>
                </div>
            </div>
            <div class="actions-vista">
                <form action="{{ route('anuncio.destroy', $anuncios->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este anuncio?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn">Eliminar</button>
                </form>
            </div>
    </div>
</main>

@endsection