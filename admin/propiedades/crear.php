<?php 
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/admin" class="boton-amarillo">Volver</a>

        <form class="formulario">
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" placeholder="Titulo de la propiedad">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" placeholder="Precio de la propiedad">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripcion:</label>
                <textarea id="descripcion" placeholder="Descripcion de la propiedad"></textarea>
            </fieldset>
            <fieldset>
                <legend>Informacion Propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" placeholder="Ejm: 3" min="1" max="10">

                <label for="wc">Baños:</label>
                <input type="number" id="wc" placeholder="Ejm: 3" min="1" max="10">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" placeholder="Ejm: 3" min="1" max="10">

                <label for="descripcion">Descripcion:</label>
                <textarea id="descripcion" placeholder="Descripcion de la propiedad"></textarea>
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                <select>
                    <option value="1">Juan</option>
                    <option value="1">Karen</option>
                </select>

            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton-verde">
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>
