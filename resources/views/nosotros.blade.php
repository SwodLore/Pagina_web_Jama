@extends('layouts.app')

@section('content')

<main class="nosotros">
    <h1 class="nosotros-title">Nos<span>otros</span></h1>
    <div class="nosotros-content">
        <img class="nosotros-content-image" src="{{ asset('img/Jama-Tienda-Tambo.png') }}" alt="Jama-Tienda-Tambo Image">
        <div class="nosotros-content-info">
            <h2 class="nosotros-content-title">¿Qué es Jama Sports?</h2>
            <p>Jama Sports es una tienda dedicada a la venta de zapatillas de alta calidad, especializándose en las mejores marcas internacionales del mercado. Somos apasionados por el calzado deportivo y de estilo casual, y ofrecemos una experiencia de compra confiable para nuestros clientes. Nuestro objetivo es proporcionar acceso a las zapatillas más icónicas y populares, traídas directamente del extranjero.</p>
            <h2 class="nosotros-content-title">¿Qué ofrecemos?</h2>
            <p>En Jama Sports, ofrecemos una amplia selección de zapatillas de las marcas más reconocidas a nivel mundial, incluyendo Adidas, Nike, Cat, Reebok, Puma, entre otras. Todas nuestras zapatillas son originales y traídas del extranjero, lo que garantiza que nuestros clientes obtengan productos auténticos y de la mejor calidad. Ya sea para deportes, moda casual o uso diario, nuestras zapatillas son famosas por su estilo, confort y durabilidad.</p>
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
            <h2 class="nosotros-caracteristicas-title">Alta Calidad</h2>
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