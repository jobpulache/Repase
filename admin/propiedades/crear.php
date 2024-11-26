<?php
require '../../includes/config/database.php';
$bd = conectBD(); //Lamado a la funcion
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    //Pasamos todos los campos al metodo post
    //Para que nos muestre los datos 
    $tile = $_POST['title']; //Les asignamos su contenido a estas variables
    $price = $_POST['price'];
    $descripcion = $_POST['description'];
    $rooms = $_POST['rooms'];
    $wc = $_POST['wc'];
    $parkLong = $_POST['parkLong'];


    //Insert in the database

    $query = "INSERT INTO propiedades (title, price, descripcion, rooms, wc, parkLong
    )VALUES('$tile','$price', '$descripcion', '$rooms', '$wc', '$parkLong')";

    echo $query;

    $resultado = mysqli_query($bd, $query);
    if ($resultado) {
        echo 'Inserted correctly';
    }
}
require '../../includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <h1>Create</h1>
    <a href="/admin" class="boton boton-verde">Volver</a>
    <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
        <fieldset>
            <legend>General information</legend>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" placeholder="property title">

            <label for="price">Price:</label>
            <input type="number" name="price" id="price" placeholder="property price">

            <label for="image">Imagen</label>
            <input type="file" id="image" name="image" accept="image/jpeg, image/png">

            <label for="description">Description:</label>
            <textarea name="description" id="description"></textarea>
        </fieldset>

        <fieldset>
            <legend>Property information</legend>
            <label for="rooms">Rooms:</label>
            <input type="number" max="10" min="1" name="rooms" id="rooms" placeholder="ej.2">

            <label for="wc">bathrooms:</label>
            <input type="number" max="10" min="1" name="bathrooms" id="bathrooms" placeholder="ej.4">

            <label for="parklong">Parklong:</label>
            <input type="number" max="10" min="1" name="parklong" id="parklong" placeholder="ej.5">
        </fieldset>

        <fieldset>
            <legend>Seller</legend>
            <select name="seller">
                <option value="1">Job DL</option>
                <option value="2">Manu rios</option>
                <option value="3">David Laid</option>
            </select>
        </fieldset>
        <input type="submit" value="created property" class="boton boton-verde">
    </form>
</main>

<?php
incluirTemplate('footer')
?>