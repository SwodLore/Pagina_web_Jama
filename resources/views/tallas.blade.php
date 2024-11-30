@extends('layouts.app')

@section('content')

<main class="talla">
    <h1>Tallas de Calzado</h1>
    <p>El calzado Unisex se ha diseñado y etiquetado según las tallas para hombre, pero están pensadas para que las use cualquier persona, independientemente de su género. Si normalmente no usas tallas para hombre, tal vez tengas que pedir una talla más pequeña a la que usas habitualmente. Verifica las medidas que aparecen a continuación y la relación en CM, para encontrar tu talla correcta.</p>
    <table>
        <thead>
            <tr>
                <th>Punta - Talón (cm)</th>
                <th>US - Hombre</th>
                <th>US - Mujer</th>
                <th>EU</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tallas as $talla)
                <tr>
                    <td>{{ $talla->cm }} cm</td>
                    <td>{{ $talla->talla_us_men }}</td>
                    <td>{{ $talla->talla_us_women }}</td>
                    <td>{{ $talla->talla_eur }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="section">
        <h2>¿Estás entre dos tallas?</h2>
        <p>Para un corte más ajustado, <span class="highlight">elige una talla menos</span>.</p>
        <p>Para un corte holgado, <span class="highlight">elige una talla más grande</span>.</p>
    </div>

    <div class="section">
        <h2>Cómo medir</h2>
        <div class="how-to-measure">
            <img src="{{ asset('img/tallaje.png') }}" alt="Talla measure">
            <div>
                <p><span class="highlight">1. Largo:</span> Mide la distancia desde la punta del dedo gordo del pie hasta la parte externa del talón.</p>
                <p>Para lograr el mejor ajuste, mide tus pies al final del día.</p>
            </div>
        </div>
    </div>

    <div class="section return-policy">
        <h2>¿No es la talla o el color correcto?</h2>
        <p>No hay problema, ofrecemos cambios de tallas gratuitos y un servicio de devolución de productos gratuito.</p>
    </div>

    <a href="#top" class="back-to-top">Volver arriba</a>
</main>

@endsection