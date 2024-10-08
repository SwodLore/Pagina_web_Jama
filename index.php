<?php 
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = true);
?>
    <main class="contenedor seccion">
        <h1>Mas Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptatibus, doloremque, quisquam, quos, dolores, consequuntur, velit, aspernatur, fugiat, laborum, voluptas, eaque.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptatibus, doloremque, quisquam, quos, dolores, consequuntur, velit, aspernatur, fugiat, laborum, voluptas, eaque.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptatibus, doloremque, quisquam, quos, dolores, consequuntur, velit, aspernatur, fugiat, laborum, voluptas, eaque.</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Departamentos en venta</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="Anuncio" >
                </picture>
                <div class="contenido-auncio">
                    <h3>Caso de Lujo en el Lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio.</p>
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
                    <a href="anuncio.html" class="boton-amarillo-block">Ver Propiedad</a>
                </div> <!-- Contenido-anuncio -->
                
            </div> <!-- anuncio -->
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio2.jpg" alt="Anuncio" >
                </picture>
                <div class="contenido-auncio">
                    <h3>Caso de Lujo terminado</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio.</p>
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
                    <a href="anuncio.html" class="boton-amarillo-block">Ver Propiedad</a>
                </div> <!-- Contenido-anuncio -->
                
            </div> <!-- anuncio -->
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio3.jpg" alt="Anuncio" >
                </picture>
                <div class="contenido-auncio">
                    <h3>Caso de Lujo con alberca</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio.</p>
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
                    <a href="anuncio.html" class="boton-amarillo-block">Ver Propiedad</a>
                </div> <!-- Contenido-anuncio -->
                
            </div> <!-- anuncio -->
        </div> <!-- contenedor-anuncios -->

        <div class="alinear-derecha">
            <a href="anuncio.html" class="boton boton-verde">Ver todas las propiedades</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Lllena el formulario de contacto y un asesor se pondrá en contacto con usted.</p>
        <a href="contacto.html" class="boton-amarillo">Contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="texto Entrada Blog">
                    </picture>
                </div>
                <div class="texto-entrada"> 
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el : <span>22/09/2024</span> por : <span>Alessandro</span></p>

                        <p> 
                            Consejo para construir una terraza en el techo de tu casa con los mejores materiales y herramientas.
                        </p>
                    </a>

                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="texto Entrada Blog">
                    </picture>
                </div>
                <div class="texto-entrada"> 
                    <a href="entrada.html">
                        <h4>Guia para la decoracion de tu hogar</h4>
                        <p class="informacion-meta">Escrito el : <span>22/09/2024</span> por : <span>Alessandro</span></p>

                        <p> 
                            Consejo para construir una terraza en el techo de tu casa con los mejores materiales y herramientas.
                        </p>
                    </a>

                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>
                <div class="testimonial">
                    <blockquote>
                        El personal se comporto de una excelente forma, muy amable y amable. Nos ha explicado el proceso y nos ha explicado que es lo que se busca.
                    </blockquote>
                    <p>- Alessandro Poves</p>
                </div>
        </section>
    </div>

<?php 
    incluirTemplate('footer');
?>
