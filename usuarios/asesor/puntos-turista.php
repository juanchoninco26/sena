<?php include '/xampp/xampp/htdocs/360/ruta360/php/puntos-turista-bd.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/estilos/menu.css" rel="stylesheet" type="text/css">
    <link href="/estilos/puntos-turista.css" rel="stylesheet" type="text/css">
    <title>puntos turista</title>
</head>
<body>
<?php 
session_start();
if ($_SESSION['Id_cargo'] ==true ){
?>
<?php include '/xampp/xampp/htdocs/360/ruta360/php/include/menu-asesor.php';?>
<?php include '/xampp/xampp/htdocs/360/ruta360/php/vista/puntos-turista.php';?>
<?php } else{
    header('Location:/login.php'); 
} ?>
</body>
</html>