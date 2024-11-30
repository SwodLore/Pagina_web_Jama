@extends('layouts.trabajadores')

@section('content')

<main>
    <div class="trabajadores-principal-personalizar">
        <div class="container">
            <section class="table-section">
                <h2>Marcas</h2>
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                    <div class="alert alert-error">{{ session('error') }}</div>
                @endif
                <form action="{{ route('marcas.create') }}" method="POST" class="form-create">
                    @csrf
                    <input type="text" name="nombre" placeholder="Nombre de la Marca" required>
                    <input type="number" name="descuento" placeholder="Descuento (%)" min="0" max="100" required>
                    <button type="submit">Agregar Marca</button>
                </form>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descuento (%)</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($marcas as $marca)
                        <tr>
                            <td>{{ $marca->nombre }}</td>
                            <td>{{ $marca->descuento}}%</td>
                            <td><form action="{{ route('marcas.destroy', $marca->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn">Eliminar</button>
                            </form></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
        <div class="pagination-container">
            {{ $marcas->links() }}
        </div>
    </div>
</main>

@endsection