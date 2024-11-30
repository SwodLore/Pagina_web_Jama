@extends('layouts.trabajadores')

@section('content')

<main>
    <div class="trabajadores-principal-personalizar">
        <div class="container">
        <section class="table-section">
            <h2>Descuentos</h2>
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                    <div class="alert alert-error">{{ session('error') }}</div>
                @endif
            <form action="{{ route('descuentos.create')}}" method="POST" class="form-create">
                @csrf
                <input type="text" name="codigo" placeholder="Código de Descuento" required>
                <input type="number" name="cantidad" placeholder="Cantidad S/." required>
                <button type="submit">Agregar Descuento</button>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($descuentos as $descuento)
                        <tr>
                            <td>{{ $descuento->codigo }}</td>
                            <td>{{ $descuento->cantidad }}</td>
                            <td><form action="{{ route('descuentos.destroy', $descuento->id) }}" method="POST">
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
            {{ $descuentos->links() }}
        </div>
    </div>
</div>
</main>

@endsection