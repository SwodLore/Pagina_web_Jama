@extends('layouts.app')

@section('content')

<main>
    <div class="tiendas">
        <h2>Conoce nuestras</h2>
        <h1>Tiendas Fisicas</h1>
        <div class="tiendas-content">
            @foreach ( $tiendas as $tienda)
                <div class="tiendas-content-ubicacion">
                    <img src="{{ asset('img/tienda1.png') }}" alt="Tienda 1 Jama Sports Huancayo">
                    <h3>Jama Sports {{$tienda->distrito}}</h3>
                    <p>{{$tienda->calle.' N° '.$tienda->numero.' '.$tienda->distrito}}</p>
                    <a href="{{$tienda->link}}" target="_blank">Ver tienda</a>
                </div>
            @endforeach
        </div>
    </div>
</main>

@endsection