@extends('layouts.admin')

@section('content')

<main>
    <div class="modal-content">
        <span id="closeModalButton" class="close"><a href="/admin/trabajadores">&times;</a></span>
        <h2>Vista Trabajadores</h2>
    
            <div class="form-modal-vista">
                <div>
                    <legend>Datos Personales</legend>
                        <label for="nombre">Nombre:</label>
                        <p>{{ $trabajador->nombre }}</p>
                        <label for="apellido">Apellido:</label>
                        <p>{{ $trabajador->apellido }}</p>
                        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                        <p>{{ $trabajador->fecha_nacimiento }}</p>
                        <label for="DNI">DNI:</label>
                        <p>{{ $trabajador->DNI }}</p>
                </div>
                <div>
                    <legend>Credenciales</legend>
                        <label for="correo">Email:</label>
                        <p>{{ $trabajador->correo }}</p>
            
                        <label for="contrasena">Contraseña Hasheada:</label>
                        <p>{{ $trabajador->contrasena }}</p>
                </div>
                <div>
                    <legend>Datos</legend>
                    <label for="salario">Salario:</label>
                    <p>S./.{{ $trabajador->salario }}</p>
        
                    <label for="departamento">Departamento:</label>
                    <p>{{ $trabajador->departamento }}</p>
                </div>
            </div>
            <div class="actions-vista">
                <button class="edit-btn"><a href="{{ route('admin.trabajadores.edit', $trabajador->id) }}">Editar</a></button>

                <form action="{{ route('admin.trabajadores.destroy', $trabajador->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este trabajador?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn">Eliminar</button>
                </form>
            </div>
    </div>
</main>

@endsection