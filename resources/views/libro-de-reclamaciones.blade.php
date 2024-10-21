@extends('layouts.app')

@section('content')

<main>
    <div class="libro">
        <div class="libro-imagen">
            <h1>Libro de Reclamaciones</h1>
            <p>Tienes algo que contactarnos</p>
        </div>
        <form action="" method="post">
            
            <fieldset>
                <legend>Ingresa tus datos</legend>
                <label for="nombre">Nombre:
                    <input type="text" placeholder="Ingrese tu nombre" name="nombre" id="nombre">
                </label>
                <label for="apellido">Apellido:
                    <input type="text" placeholder="Ingrese tu apellido" name="apellido" id="apellido">
                </label>
                <label for="email">Email:
                    <input type="email" placeholder="Ingrese tu email" name="email" id="email">
                </label>
                <label for="telefono">Telefono:
                    <input type="tel" placeholder="Ingrese tu telefono" name="telefono" id="telefono">
                </label>
                <label for="tipo-documento">Tipo de Documento:
                    <select name="tipo-documento" id="">
                        <option value="DNI">DNI</option>
                    </select>
                </label>
                <label for="numero-documento">Número de Documento:
                    <input type="text" placeholder="Num. Documento" name="numero-documento" id="numero-documento">
                </label>
                <label for="direccion">Dirección:
                    <input type="text" placeholder="Ingrese la dirección" name="direccion" id="direccion">
                </label>
            </fieldset>
            
            <fieldset>
                <legend>Ingresa tu mensaje</legend>
                <label for="tipo-mensaje">Tipo:
                    <select name="tipo-mensaje" id="">
                        <option value="consulta">Consulta</option>
                        <option value="pedido">Pedido</option>
                        <option value="reclamo">Reclamo</option>
                        <option value="sugerencia">Sugerencia</option>
                        <option value="queja">Queja</option>
                    </select>
                </label>
                <label for="mensaje">Mensaje:
                    <textarea name="" id=""></textarea>
                </label>
                
            </fieldset>
        </form>
        <input class="boton boton-enviar" type="submit" value="Enviar">
    </div>
</main>

@endsection