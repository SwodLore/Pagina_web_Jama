<?php 
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = true);
?>
    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Imagen de nosotros">
                    
                </picture>
            </div>
            
            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia laborum aspernatur ipsa voluptates velit expedita eius, tenetur fuga? Odio aspernatur eveniet, illum necessitatibus maiores praesentium molestias cumque deserunt eaque ipsam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia laborum aspernatur ipsa voluptates velit expedita eius, tenetur fuga? Odio aspernatur eveniet, illum necessitatibus maiores praesentium molestias cumque deserunt eaque ipsam?

                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia laborum aspernatur ipsa voluptates velit expedita eius, tenetur fuga? Odio aspernatur eveniet, illum necessitatibus maiores praesentium molestias cumque deserunt eaque ipsam?
                </p>
            </div>


        </div>
    </main>

    <section class="contenedor seccion">
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
    </section>

<?php 
    incluirTemplate('footer');
?>
