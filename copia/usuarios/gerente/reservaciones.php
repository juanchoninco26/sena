<?php include '/xampp/xampp/htdocs/360/ruta360/php/puntos-turista-bd.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/estilos/menu.css" >
    <link rel="stylesheet" type="text/css"  href="/estilos/reservaciones.css" >
    <title>reservaciones</title>
</head>
<body>
<?php
session_start();
if ($_SESSION['Id_cargo'] ==true ){
?>
    <?php 
    include '/xampp/xampp/htdocs/360/ruta360/php/include/menu.php';
    ?>
   <?php
   include '/xampp/xampp/htdocs/360/ruta360/php/vista/reservaciones.php' 
   ?>
<?php } else{
    header('Location:/login.php'); ;
} ?>
</body>
</html>