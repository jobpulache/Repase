<?php
@include './src/includes/templates/header.php';
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Casa frente al bosque</h1>
    <picture>
        <source srcset="/build/img/anuncio1.webp" type="image/webp">
        <source srcset="/build/img/anuncio1.jpg" type="image/jpeg">
        <img src="build/img/anuncio1.jpg" alt="Imagen del anuncio" loading="lazy">
    </picture>

    <div class="resumen-propiedad">
        <p class="precio">S/.1000</p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" src="build/img/icono_wc.svg" alt="Icon Bathroom" loading="lazy">
                <p>2</p>
            </li>
            <li>
                <img class="icono" src="build/img/icono_estacionamiento.svg" alt="Icon parking lot" loading="lazy">
                <p>2</p>
            </li>
            <li>
                <img class="icono" src="build/img/icono_dormitorio.svg" alt="Icon DedRoom" loading="lazy">
                <p>4</p>
            </li>
        </ul>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, maxime ratione, molestiae quibusdam
            ab laboriosam fugiat sequi iure fugit eos assumenda repudiandae, quis quasi consequuntur distinctio
            quisquam ad reiciendis rerum?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur earum, exercitationem cupiditate
            distinctio, ipsa fugit magni officia possimus, eius officiis perspiciatis doloremque? Ad, provident
            officia et aperiam sunt error dicta!
        </p>
    </div>
</main>

<?php
@include './src/includes/templates/footer.php';
?>