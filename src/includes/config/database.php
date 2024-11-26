<?php
function   conectBD(): mysqli
{
    $bd = mysqli_connect('localhost', 'root', '[z0cw54foj#i!!4', 'realestate_crud');

    if (!$bd) {
        echo  'Conecting failed...';
        exit;
    }
    return $bd;
}
