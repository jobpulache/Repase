<?php
@include './src/includes/templates/header.php';
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Guia para la decoración de tu hogar</h1>
    <picture>
        <source srcset="/build/img/anuncio2.webp" type="image/webp">
        <source srcset="/build/img/anuncio2.jpg" type="image/jpeg">
        <img src="build/img/anuncio2.jpg" alt="Imagen del anuncio" loading="lazy">
    </picture>
    <p class="informacion-meta">Escrito el <span>27/12/2024</span>por <span>Job Manu rios Fernandez
        </span> </p>
    <div class="resumen-propiedad">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, corrupti maiores necessitatibus voluptate
            animi totam officia fuga officiis, doloribus placeat quia et architecto illum ducimus qui quo porro
            eligendi neque.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem distinctio at voluptatem magnam
            repellat iusto dolorem voluptas illum saepe iure quo, laboriosam modi praesentium beatae, dignissimos
            itaque fuga debitis ipsa?</p>
    </div>
</main>

<?php
@include './src/includes/templates/footer.php'
?>