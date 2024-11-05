@extends('layouts.admin')

@section('content')

<main>
    <div class="filter-container">
        <h2>Admin</h2>
        <button class="add-product-btn"><a href="{{ route('admin.admin.create') }}">Agregar Admin</a></button>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Admin ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Fecha Nacimiento</th>
                    <th>DNI</th>
                    <th>Fecha de creacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $admins as $admin)
                <tr>
                    <td>{{$admin->id}}</td>
                    <td>{{$admin->nombre}}</td>
                    <td>{{$admin->apellido}}</td>
                    <td>{{$admin->correo}}</td>
                    <td>{{$admin->fecha_nacimiento}}</td>
                    <td>{{$admin->DNI}}</td>
                    <td>{{$admin->created_at}}</td>
                    <td class="actions">
                        <button class="view-btn"><a href="{{ route('admin.admin.showDetails', ['id' => $admin->id]) }}" class="view-btn">Ver</a></button>

                        <button class="edit-btn"><a href="{{ route('admin.admin.edit', $admin->id) }}">Editar</a></button>

                        <form action="{{ route('admin.admin.destroy', $admin->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este admin?');">
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
        {{ $admins->links() }}
    </div>
</main>

@endsection