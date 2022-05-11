<?php 
include '/xampp/xampp/htdocs/360/ruta360/php/puntos-turista-bd.php';

if (isset($_POST['loguin'])){
    $nombre = $_POST['username'];
    $contraseña=$_POST['password'];
    session_start();
    

    $consulta="SELECT Nombre,Contraseña,Id_cargo FROM empleados WHERE Nombre='$nombre' and Contraseña='$contraseña'";
    $resultado= mysqli_query($ared,$consulta);
    $filas= mysqli_num_rows($resultado);

    $row=mysqli_fetch_assoc($resultado);
     
    if ($row['Id_cargo']==1){ 
        $row=mysqli_fetch_assoc($resultado);
        $_SESSION['username'] = $row['Nombre'];
        $_SESSION['Id_cargo']=$row['Id_cargo'];
        header("location:/usuarios/gerente/reservaciones.php");
    }if($row['Id_cargo']==2){
        $_SESSION['username'] = $row['Nombre'];
        $_SESSION['Id_cargo']=$row['Id_cargo'];
        header("location:/usuarios/asesor/reservaciones.php");
    }
   if($row['Id_cargo']==3){
        $row=mysqli_fetch_assoc($resultado);
        $_SESSION['username'] = $row['Nombre'];
        $_SESSION['Id_cargo']=$row['Id_cargo'];
        header("location:/usuarios/contador/puntos-turista.php");
    }
}
?>