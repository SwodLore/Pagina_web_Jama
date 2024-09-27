<?php 
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = true);
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Casa en venta frente al bosque">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$100,000</p>
            <ul class="iconos-caracteristicas"> 
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="Icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono dormitorio">
                    <p>4</p>
                </li>

            </ul>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptatibus, doloremque, quisquam, quos, dolores, consequuntur, velit, aspernatur, fugiat, laborum, voluptas, eaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptatibus, doloremque, quisquam, quos, dolores, consequuntur, velit, aspernatur, fugiat, laborum, voluptas, eaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptatibus, doloremque, quisquam, quos, dolores, consequuntur, velit, aspernatur, fugiat, laborum, voluptas, eaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptatibus, doloremque, quisquam, quos, dolores, consequuntur, velit, aspernatur, fugiat, laborum, voluptas, eaque.

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptatibus, doloremque, quisquam, quos, dolores, consequuntur, velit, aspernatur, fugiat, laborum, voluptas, eaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptatibus, doloremque, quisquam, quos, dolores, consequuntur, velit, aspernatur, fugiat, laborum, voluptas, eaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptatibus, doloremque, quisquam, quos, dolores, consequuntur, velit, aspernatur, fugiat, laborum, voluptas, eaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptatibus, doloremque, quisquam, quos, dolores, consequuntur, velit, aspernatur, fugiat, laborum, voluptas, eaque.
            </p>
        </div>
    </main>

<?php 
    incluirTemplate('footer');
?>
