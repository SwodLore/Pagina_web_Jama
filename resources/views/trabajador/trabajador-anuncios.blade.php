@extends('layouts.trabajadores')

@section('content')

<main>
    <div class="filter-container">
        <h2>Anuncios</h2>
        <button class="add-product-btn"><a href="{{ route('anuncio.create') }}">Agregar Anuncios</a></button>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Producto ID</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Fecha Creación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anuncios as $anuncio)
                <tr>
                    <td>{{$anuncio->id}}</td>
                    <td>{{$anuncio->nombre}}</td>
                    <td class="anuncio-imagen"><img src="{{ asset('img/anuncios/' . $anuncio->imagen) }}" alt="Imagen de la anuncio"></td>
                    <td>{{$anuncio->created_at}}</td>
                    <td class="actions">
                        <button class="view-btn"><a href="{{ route('anuncio.showDetails', ['id' => $anuncio->id]) }}" class="view-btn">Ver</a></button>

                        <form action="{{ route('anuncio.destroy', $anuncio->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este anuncio?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="pagination-container">
        {{ $anuncios->links() }}
    </div>
</main>

@endsection