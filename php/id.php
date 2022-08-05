<?php 
session_start();
/*
 se optiene el id turista con ajax script de la funcion cargar dato
 que esta ubicado en php\vista\reservaciones.php

*/
$_SESSION['j']=$_POST['id'];

function m(){
    $_SESSION['codigoDescuento']=$_POST['ed'];
}




?>