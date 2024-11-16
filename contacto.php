<?php
@include './src/includes/templates/header.php';
?>

<main class="contenedor seccion">
    <h1>Contacto</h1>
    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpeg">
        <img src="build/img/destacada.jpg" alt="Image Featured" loading="lazy">
    </picture>
    <h2>Llene el formulario de contacto</h2>
    <form class="formulario-contacto">
        <fieldset>
            <legend>Información personal</legend>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" placeholder="Tu nombre">
            <label for="email">e-mail</label>
            <input type="email" id="email" placeholder="Tu email">
            <label for="telefono">Telefono</label>
            <input type="tel" id="telefono" placeholder="Tu telefono">
            <label for="message">message</label>
            <textarea id="message" placeholder="Your Message"></textarea>
        </fieldset>
        <fieldset>
            <legend>Información de la propiedad</legend>
            <label for="opciones">Buys o Sell?</label>
            <select id="opciones">
                <option value="" disabled selected>---Elige una opción--</option>
                <option value="Compra">Buys</option>
                <option value="Vende">Sell</option>
            </select>
            <label for="presupuesto">¿Precio o presupuesto?</label>
            <input type="number" id="presupuesto" placeholder="Tu precio o presupuesto">
        </fieldset>

        <fieldset>
            <legend>Contacto</legend>
            <p>Cómo desea ser contactado</p>
            <div class="forma-contacto">
                <label for="telefono">Telefono</label>
                <input type="radio" id="telefono" value="telefono">

                <label for="email">email</label>
                <input type="radio" id="email" value="email">
            </div>
            <p>Si eligio telefono, eliga la fecha y hora para contactarlo</p>
            <label for="fecha">Fecha</label>
            <input type="date" id="fecha">
            <label for="hour">Hour</label>
            <input type="time" id="hour">
        </fieldset>
    </form>
    <a href="#" class="boton-verde">Send Message</a>
</main>


<?php
@include './src/includes/templates/footer.php'
?>