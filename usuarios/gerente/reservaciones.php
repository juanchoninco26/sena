<?php 
include '../../php/puntos-turista-bd.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/estilos/menu.css" >
    <link rel="stylesheet" type="text/css"  href="/estilos/reservaciones.css" >
    <script src='/fullcalendar/dist/index.global.js'></script>
    <script src="/fullcalendar/packages/core/locales/es-us.global.js"></script>
    
    <title>reservaciones</title>
</head>
<body>
<?php
session_start();
if ($_SESSION['Id_cargo']==1 ){
?>
<?php 
    include '../../php/include/menu.php';
?>
<?php
   include '../../php/vista/reservaciones.php' 
?>
<?php } else{
    header('Location:/login.php'); ;
} ?>
</body>
</html>