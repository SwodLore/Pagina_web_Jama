@extends('layouts.trabajadores')

@section('content')

<main>
    <div class="filter-container">
        <h2>Tiendas</h2>
        <button class="add-product-btn"><a href="{{ route('tienda.create') }}">Agregar Tiendas</a></button>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Tiendas ID</th>
                    <th>Calle</th>
                    <th>Numero</th>
                    <th>Imagen</th>
                    <th>Distrito</th>
                    <th>Provincia</th>
                    <th>Departamento</th>
                    <th>Fecha Creación</th>
                    <th>Link</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tiendas as $tienda)
                <tr>
                    <td>{{$tienda->id}}</td>
                    <td>{{$tienda->calle}}</td>
                    <td>N° {{$tienda->numero}}</td>
                    <td class="tienda-imagen"><img src="{{ asset('img/tiendas/' . $tienda->imagen) }}" alt="Imagen de la tienda"></td>
                    <td>{{$tienda->distrito}}</td>
                    <td>{{$tienda->provincia}}</td>
                    <td>{{$tienda->departamento}}</td>
                    <td>{{$tienda->created_at}}</td>
                    <td><a href="{{$tienda->link}}">Ver Tienda</a></td>
                    <td class="actions">
                        <button class="view-btn"><a href="{{ route('tienda.showDetails', ['id' => $tienda->id]) }}" class="view-btn">Ver</a></button>

                        <button class="edit-btn"><a href="{{ route('tienda.edit', $tienda->id) }}">Editar</a></button>

                        <form action="{{ route('tienda.destroy', $tienda->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta tienda?');">
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
        {{ $tiendas->links() }}
    </div>
</main>

@endsection