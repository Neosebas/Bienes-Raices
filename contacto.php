<?php 

    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image.webp">
            <source srcset="build/img/destacada3.jpg" type="image.jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen contacto">
        </picture>

        <h2>Llene el formulario de Contacto</h2>

        <form action="" class="formulario">
            <fieldset>
                <legend>Informacion Personal</legend>
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre">

                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu E-mail" id="email">

                <label for="telefono">Telefono</label>
                <input type="tel" placeholder="Tu E-mail" id="telefono">

                <label for="mensaje">Mensaje</label>
                <textarea name="" id="mensaje"></textarea>
            </fieldset> <!-- Datos Personales-->

            <fieldset>
                <legend>Informacion sobre la Propiedad</legend>
                <label for="opciones">¿ Compra o Vende ?</label>
                <select name="" id="opciones">
                    <option value="" disabled selected>Seleccione</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Tu precio o Presupuesto" id="presupuesto">
            </fieldset> <!-- Compra o venta -->

            <fieldset>
                <legend>Informacion de la Propiedad</legend>

                <p>¿ Como desea ser contactado ?</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
                    
                    <label for="contactar-email">E-mail</label>
                    <input name="contacto" type="radio" value="E-mail" id="contactar-email">
                </div>

                <p>Si elegio Telefono, elija la fecha y hora</p>

                <label for="fecha">Fecha</label>
                <input type="date" id="fehca">

                <label for="hora">Hora</label>
                <input type="time" id="hora" min="09:00" max="18:00">

            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">
        </form>

    </main>

<?php incluirTemplate('footer') ?>