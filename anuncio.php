<?php include 'includes/templates/header.php'; ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa En venta junto al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image.webp">
            <source srcset="build/img/destacada.jpg" type="image.jpeg">
            <img src="build/img/destacada.jpg" alt="Imagen de propiedad">
        </picture>
        <div class="resumen-propiedad">
            <p class="precio">$ 130.000.000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="Icono Wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono Estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Habitaciones">
                    <p>3</p>
                </li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam libero, porro deleniti fugit vero facilis
                ducimus quidem velit magni aliquid, unde consequuntur sunt modi natus id exercitationem a, illum animi!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae neque omnis mollitia autem doloribus
                consectetur iure vero sequi accusantium aperiam labore nesciunt harum deleniti incidunt, qui sapiente
                repellendus iste voluptatem?</p>
        </div>
    </main>

<?php include 'includes/templates/footer.php'; ?>