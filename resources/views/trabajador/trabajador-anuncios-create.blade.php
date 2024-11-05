@extends('layouts.trabajadores')

@section('content')

<main>
    <div class="modal-content">
        <span id="closeModalButton" class="close"><a href="/trabajadores/anuncio">&times;</a></span>
            <h2>Agregar Nuevo Producto</h2>
            <form id="productForm" action="{{ route('anuncio.store') }}" method="POST" enctype="multipart/form-data">
                
                @csrf

                <div class="form-modal-anuncio">
                    <div>
                        <img src="{{ asset('img/anuncios/Anuncio2.png') }}" alt="Producto">
                    </div>
                    <div>
                        <label for="imagen">Imagen:
                            <input type="file" id="imagen" name="imagen" required>
                        </label>

                        <label for="nombre">Nombre:
                            <input type="text" id="nombre" name="nombre" required>
                        </label>
                    </div>

                </div>

                <button type="submit" class="submit-btn">Guardar Anuncio</button>
                
            </form>
        </div>
</main>

@endsection