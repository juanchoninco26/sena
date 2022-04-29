<?php 
include '/xampp/xampp/htdocs/360/ruta360/php/puntos-turista-bd.php';

if (isset($_POST['loguin'])){
    $nombre = $_POST['username'];
    $contraseña=$_POST['password'];
    $row=[1];
    session_start();
    

    $consulta="SELECT Nombre,Contraseña,Id_cargo FROM empleados WHERE Nombre='$nombre' and Contraseña='$contraseña'";
    $resultado= mysqli_query($ared,$consulta);
    $filas= mysqli_fetch_array($resultado);

    
        switch ($filas['Id_cargo']) {             
            case 1:
                header("location:/usuarios/gerente/reservaciones.php");
                break;
            case 2:
                header("location:/usuarios/asesor/reservaciones.php");
                break;
            case 3:
                header("location:/usuarios/contador/puntos-turista.php");
                break;
            default:
                
                break;
        }

}
?>