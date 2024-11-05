@extends('layouts.admin')

@section('content')

<main>
    <div class="modal-content">
        <span id="closeModalButton" class="close"><a href="/admin/admin">&times;</a></span>
            <h2>Agregar Nuevo Producto</h2>
            <form id="productForm" action="{{ route('admin.admin.store') }}" method="POST" enctype="multipart/form-data">
                
                @csrf

                <div class="form-modal">
                    <div>
                        <legend>Datos Personales</legend>
                        <label for="nombre">Nombre:
                            <input type="text" id="nombre" name="nombre" required>
                        </label>
                        <label for="apellido">Apellido:
                            <input type="text" id="apellido" name="apellido" required>
                        </label>
                        <label for="fecha_nacimiento">Fecha de Nacimiento:
                            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
                        </label>
                        <label for="DNI">DNI:
                            <input type="text" id="DNI" name="DNI" required>
                        </label>
                    </div>
                    <div>
                        <legend>Credenciales</legend>
                        <label for="correo">Email:
                            <input type="email" id="correo" name="correo" required>
                        </label>
            
                        <label for="contrasena">Contraseña:
                            <input type="text" id="contrasena" name="contrasena" required>
                        </label>
                    </div>
                </div>
                <button type="submit" class="submit-btn">Guardar Admin</button>
            </form>
        </div>
</main>

@endsection