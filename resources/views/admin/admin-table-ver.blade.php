@extends('layouts.admin')

@section('content')

<main>
    <div class="modal-content">
        <span id="closeModalButton" class="close"><a href="/admin/admin">&times;</a></span>
        <h2>Vista Producto</h2>
    
            <div class="form-modal-vista">
                <div>
                    <legend>Datos Personales</legend>
                        <label for="nombre">Nombre:</label>
                        <p>{{ $admin->nombre }}</p>
                        <label for="apellido">Apellido:</label>
                        <p>{{ $admin->apellido }}</p>
                        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                        <p>{{ $admin->fecha_nacimiento }}</p>
                        <label for="DNI">DNI:</label>
                        <p>{{ $admin->DNI }}</p>
                </div>
                <div>
                    <legend>Credenciales</legend>
                        <label for="correo">Email:</label>
                        <p>{{ $admin->correo }}</p>
            
                        <label for="contrasena">Contraseña Hasheada:</label>
                        <p>{{ $admin->contrasena }}</p>
                </div>
            </div>
            <div class="actions-vista">
                <button class="edit-btn"><a href="{{ route('admin.admin.edit', $admin->id) }}">Editar</a></button>

                <form action="{{ route('admin.admin.destroy', $admin->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este admin?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn">Eliminar</button>
                </form>
            </div>
    </div>
</main>

@endsection