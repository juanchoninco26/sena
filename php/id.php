<?php 
session_start();
/*
 se optiene el id turista con ajax script de la funcion cargar dato
 que esta ubicado en php\vista\reservaciones.php

*/
if (isset($_POST['id'])) {
    $_POST['id']=1;
}
$_SESSION['j']=$_POST['id'];

$_SESSION['codigoDescuento']=$_POST['ed'];





?>