<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes raices- repase</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>

<body>
    <header class="header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/"> <img src="build/img/logo.svg" alt="Logo de Bienes raices"></a>
                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="Icon DarkMode">
                </div>
                <div class="derecha">
                    <img class="dark-mode-boton" src="build/img/dark-mode.svg" alt="Icon DarkMoe">
                    <nav class="navegacion">
                        <a href="nosotros.html">Nosotros</a>
                        <a href="anuncios.html">Anuncios</a>
                        <a href="blog.html">Blog</a>
                        <a href="contacto.html">Contacto</a>
                    </nav>
                </div>
            </div>
            <h1>Ventas de casas y departamentos exclusivos de lujo</h1>
        </div>
    </header>
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



    <script src="build/js/bundle.min.js"></script>

</body>

</html>