@extends('layouts.app')

@section('content')
<div class="container-micuenta">
    <aside class="sidebar">
        <h2>Mi Cuenta</h2>
        <ul>
            <li><a href="/usuario/micuenta">Mi cuenta</a></li>
            <li><a href="/usuario/mipedido">Mis pedidos</a></li>
            <li><a href="/usuario/mifavorito">Mis favoritos</a></li>
            <li><a href="/usuario/misdirecciones">Libreta de direcciones</a></li>
            <li><a href="/usuario/informacionCuenta">Información de cuenta</a></li>
            <li><a href="/usuario/micarrito">Mi carrito</a></li>
            <li><a href="/usuario/mispagos">Mis medios de pago</a></li>
            <li><a onclick="document.getElementById('UserLogoutForm').submit();" href="#">Cerrar Sesión</a>
                <form id="UserLogoutForm" action="{{ route('logout.user') }}" method="POST">
                    @csrf
                </form></li>
        </ul>
    </aside>
    <div class="content">
        <h2>Editar Dirección</h2>
        @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        <form action="{{ route('misdirecciones.update', $direccion->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="Nombre" id="nombre" class="form-control" value="{{ old('nombre', $direccion->Nombre) }}" required>
            </div>

            <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" id="direccion" class="form-control" value="{{ old('direccion', $direccion->direccion) }}" required>
            </div>

            <div class="form-group">
                <label for="referencia">Referencia</label>
                <input type="text" name="referencia" id="referencia" class="form-control" value="{{ old('referencia', $direccion->referencia) }}" required>
            </div>

            <div class="form-group">
                <label for="departamento">Departamento</label>
                <input type="text" name="departamento" id="departamento" class="form-control" value="{{ old('departamento', $direccion->departamento) }}" required>
            </div>

            <div class="form-group">
                <label for="provincia">Provincia</label>
                <input type="text" name="provincia" id="provincia" class="form-control" value="{{ old('provincia', $direccion->provincia) }}" required>
            </div>

            <div class="form-group">
                <label for="distrito">Distrito</label>
                <input type="text" name="distrito" id="distrito" class="form-control" value="{{ old('distrito', $direccion->distrito) }}" required>
            </div>

            <div class="form-group">
                <label for="codigo_postal">Código Postal</label>
                <input type="text" name="codigo_postal" id="codigo_postal" class="form-control" value="{{ old('codigo_postal', $direccion->codigo_postal) }}" required>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" id="telefono" class="form-control" value="{{ old('telefono', $direccion->telefono) }}" required>
            </div>

            <div class="form-group">
                <label for="pais">País</label>
                <input type="text" name="pais" id="pais" class="form-control" value="{{ old('pais', $direccion->pais) }}" required>
            </div>

            <button type="submit" class="btn-submit">Actualizar Dirección</button>
        </form>
    </div>
</div>
@endsection
