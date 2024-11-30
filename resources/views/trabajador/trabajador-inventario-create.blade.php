@extends('layouts.trabajadores')

@section('content')

<main>
    <div class="table-container">
        @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                    <div class="alert alert-error">{{ session('error') }}</div>
                @endif
        <table>
            <thead>
                <tr>
                    <th>Producto ID</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Código</th>
                    <th>Imagen</th>
                    <th>Color</th>
                    <th>Precio</th>
                    <th>Genero</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articulos as $articulo)
                <tr>
                    <td>{{ $articulo->id }}</td>
                    <td>{{ $articulo->nombre }}</td>
                    <td>{{ $articulo->marca->nombre}}</td>
                    <td>{{ $articulo->codigo}}</td>
                    <td><img src="{{ asset('img/productos/' . $articulo->imagen) }}" alt="Producto"></td>
                    <td>{{$articulo->color}}</td>
                    <td>S/. {{$articulo->precio}}</td>
                    <td>{{ $articulo->genero }}</td>
                    <td class="actions">
                        <button class="view-btn">
                            <a href="{{ route('productos.addtallas', ['id' => $articulo->id]) }}" class="view-btn">Agregar Tallas</a>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>

@endsection