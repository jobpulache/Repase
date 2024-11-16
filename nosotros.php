<?php

require './src/includes/funciones.php'; //Es nos sirve para funciones, un código mas complejo. INPORTANE EN APP

incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Conoce sobre nosotros</h1>
    <div class="contenido-nosotros">

        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img src="build/img/nosotros.jpg" alt="Imagen de nosotros" loading="lazy">
            </picture>
        </div>
        <div class="texto">
            <blockquote>25 años de experiencia en el sector</blockquote>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam nisi corporis nobis illum aspernatur
                corrupti magni sunt officiis amet eaque maxime, unde asperiores laborum architecto in nemo quam
                doloremque quae?</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam adipisci ipsa repellendus ducimus,
                beatae laudantium voluptates qui dolorum dicta ex a recusandae nemo maxime eaque molestias neque
                ?</p>
        </div>
    </div>
</main>

<section class="contenedor seccion">
    <h1>Más sobre nosotros</h1>
    <div class="icons-about-us">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icon Segurity" loading="lazy">
            <h3>Segurity</h3>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente excepturi culpa architecto et
                in non quia aut debitis reiciendis
                accusantium iure.
            </p>
        </div>


        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icon Price" loading="lazy">
            <h3>Price</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe architecto quas maiores culpa
                necessitatibus quis reprehenderit temporibus itaque ipsum enims et.
            </p>
        </div>

        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icon Time" loading="lazy">
            <h3>A tiempo</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex cupiditate adipisci dolorem eius animi
                optio facilisut eaque sequi, repellat cupiditate dolores id sapiente
                natus facilis minus.
            </p>
        </div>

    </div>
</section>

<?php
@include './src/includes/templates/footer.php'
?>