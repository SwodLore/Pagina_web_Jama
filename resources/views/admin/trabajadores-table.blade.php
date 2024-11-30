@extends('layouts.admin')

@section('content')

<main>
    <div class="filter-container">
        <h2>Trabajadores</h2>
        <button class="add-product-btn"><a href="{{ route('admin.trabajadores.create') }}">Agregar Trabajador</a></button>
    </div>
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
                    <th>Trabajador ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Fecha Nacimiento</th>
                    <th>DNI</th>
                    <th>Salario</th>
                    <th>Departamento</th>
                    <th>Fecha de creacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $trabajadores as $trabajador)
                <tr>
                    <td>{{$trabajador->id}}</td>
                    <td>{{$trabajador->nombre}}</td>
                    <td>{{$trabajador->apellido}}</td>
                    <td>{{$trabajador->correo}}</td>
                    <td>{{$trabajador->fecha_nacimiento}}</td>
                    <td>{{$trabajador->DNI}}</td>
                    <td>{{$trabajador->salario}}</td>
                    <td>{{$trabajador->departamento}}</td>
                    <td>{{$trabajador->created_at}}</td>
                    <td class="actions">
                        <button class="view-btn"><a href="{{ route('admin.trabajadores.showDetails', ['id' => $trabajador->id]) }}">Ver</a></button>

                        <button class="edit-btn"><a href="{{ route('admin.trabajadores.edit', $trabajador->id) }}">Editar</a></button>

                        <form action="{{ route('admin.trabajadores.destroy', $trabajador->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este trabajador?');">
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
        {{ $trabajadores->links() }}
    </div>
</main>

@endsection