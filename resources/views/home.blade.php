@extends('layouts.app')

@section('content')

<main>
    <h1>Hola</h1>
    
    <div class="nosotros-caracteristicas">
        <div class="nosotros-caracteristicas-content">
            <img class="nosotros-icon" src="{{ asset('img/envio.svg') }}" alt="Envio Icon">
            <h2 class="nosotros-caracteristicas-title">Envio a domicilio</h2>
            <p>Enviamos a domicilio rápidamente.</p>
        </div>
        <div class="nosotros-caracteristicas-content">
            <img class="nosotros-icon" src="{{ asset('img/seguro.svg') }}" alt="seguro Icon">
            <h2 class="nosotros-caracteristicas-title">Compras Seguras</h2>
            <p>Pagos 100% seguros en cada compra.</p>
        </div>
        <div class="nosotros-caracteristicas-content">
            <img class="nosotros-icon" src="{{ asset('img/calidad.svg') }}" alt="Calidad Icon">
            <h2 class="nosotros-caracteristicas-title">Alta <span>Calidad</span></h2>
            <p>Zapatillas originales de marcas top.</p>
        </div>
        <div class="nosotros-caracteristicas-content">
            <img class="nosotros-icon" src="{{ asset('img/devolucion.svg') }}" alt="Devolucion Icon">
            <h2 class="nosotros-caracteristicas-title">Cambios y Devoluciones</h2>
            <p>Te ayudamos en lo que necesites.</p>
        </div>
    </div>
</main>

@endsection