@extends('layouts.trabajadores')

@section('content')

<main>
    <div class="trabajadores-principal-personalizar">
        <div class="container">
        <section class="table-section">
                <h2>Tallas</h2>
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                    <div class="alert alert-error">{{ session('error') }}</div>
                @endif
                <form action="{{ route('tallas.create') }}" method="POST" class="form-create">
                    @csrf
                    <input type="number" name="cm" placeholder="Centímetros (cm)" step="0.1" required>
                    <input type="number" name="talla_us_men" placeholder="Talla US Men" step="0.1" required>
                    <input type="number" name="talla_us_women" placeholder="Talla US Women" step="0.1" required>
                    <input type="text" name="talla_eur" placeholder="Talla EUR" required>
                    <button type="submit">Agregar Talla</button>
                </form>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Centímetros</th>
                            <th>Talla US Men</th>
                            <th>Talla US Women</th>
                            <th>Talla EUR</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tallas as $talla)
                            <tr>
                                <td>{{ $talla->cm }}</td>
                                <td>{{ $talla->talla_us_men }}</td>
                                <td>{{ $talla->talla_us_women }}</td>
                                <td>{{ $talla->talla_eur }}</td>
                                <td><form action="{{ route('tallas.destroy', $talla->id) }}" method="POST">
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
            {{ $tallas->links() }}
        </div>
    </div>
</div>
</main>

@endsection