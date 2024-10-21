@extends('layouts.app')

@section('content')

<main>
    <h1>Hola</h1>
    <div class="tiendas">
        <h2>Conoce nuestras</h2>
        <h1>Tiendas Fisicas</h1>
        <div class="tiendas-content">
            <div class="tiendas-content-ubicacion">
                <iframe src="https://www.google.com/maps/embed?pb=!4v1729478283601!6m8!1m7!1sABEO4o983dVy0b3LygGmAA!2m2!1d-12.07119634229754!2d-75.203336982463!3f317.09733895287866!4f-8.047738072342028!5f0.7820865974627469" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <h3>Jama Sports Huancayo</h3>
                <p>Prolongacion Huanuco 275 Huancayo - En la galeria San Francisco de Asis</p>
                <a href="https://maps.app.goo.gl/KZ1V6tUu6u6MudqZ8" target="_blank">Ver tienda</a>
            </div>
            <div class="tiendas-content-ubicacion">
                <iframe src="https://www.google.com/maps/embed?pb=!4v1729478244490!6m8!1m7!1suF2Ls9jzJrxJe37dAYyF6A!2m2!1d-12.05679420001754!2d-75.21766113962298!3f25.783692652672947!4f-1.2653573915792862!5f0.4000000000000002" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <h3>Jama Sports Huancayo El tambo</h3>
                <p>Mariscal Castilla N 1114 - El tambo Huancayo</p>
                <a href="https://maps.app.goo.gl/NeGGzM3W1aYFfTL3A" target="_blank">Ver tienda</a>
            </div>
            <div class="tiendas-content-ubicacion">
                <iframe src="https://www.google.com/maps/embed?pb=!4v1729478405789!6m8!1m7!1s7B0VUZFFV5Vqxv-tj6zeHQ!2m2!1d-12.08426856184403!2d-75.20507452817066!3f333.72090688773244!4f-5.1387448789019885!5f0.7820865974627469" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <h3>Jama Sport Chilca</h3>
                <p>Av 9 de Diciembre N 518 - Chilca Huancayo</p>
                <a href="https://maps.app.goo.gl/fEgWiEUHxZa2xFGs6" target="_blank">Ver tienda</a>
            </div>
        </div>
    </div>
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