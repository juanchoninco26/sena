<?php
/*$ared = mysqli_connect(
    'localhost',
    'root',
    '',
    'ared',
     2526
);

if (isset($ared)) {
    echo 'db is connected';
}*/

function rutas(){
    $rutas_bd=include '../../php/puntos-turista-bd.php';
    return $rutas_bd;
}
?> 