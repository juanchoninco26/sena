<?php include '../../php/puntos-turista-bd.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/estilos/editar-paquete-turista.css" rel="stylesheet" type="text/css">
    <title>Editar paquete</title>
</head>
<body>
<?php
session_start();
if ($_SESSION['Id_cargo']==1 or $_SESSION['Id_cargo']==2){
?>
    <div>
        <form action="/php/guardar_dat.php" method="POST">
            <input type="submit" value="volver" name="volverSitios">
        </form>
    </div>
    <div>
        
    </div>
<?php }?>
</body>
</html>