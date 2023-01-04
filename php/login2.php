<?php 
include '../php/puntos-turista-bd.php';

//https://www.youtube.com/watch?v=X6myYinstqA --> Seguridad Informática con PHP - Parte 1


if (isset($_POST['loguin'])){
    $nombre = mysqli_real_escape_string($ared,$_POST['username']);
    $contraseña= mysqli_real_escape_string($ared,$_POST['password']);
    $row1="Administrador";
    $row2="Asesor";
    $row3="Contador";
    session_start();
    $_SESSION['Nombre']=$nombre;


    $consulta="SELECT Nombre,Contraseña,Id_cargo FROM empleados WHERE Nombre='$nombre' and Contraseña=Contraseña";
    $resultado= mysqli_query($ared,$consulta) or die(mysqli_error($ared));
    $filas= mysqli_fetch_array($resultado);
    $_SESSION['Id_cargo']=$filas['Id_cargo'];

    //learn:
    //preg_match()
    //hash()
    //password_hash()
    $hash_verify=password_verify($contraseña,$filas['Contraseña']);

    if($hash_verify){
        switch ($filas['Id_cargo']) {    
            case 1://administrador  
                header("location:../../usuarios/gerente/reservaciones.php");
                break;
            case 2://asesor
                header("location:../../usuarios/asesor/reservaciones.php");
                break;
            case 3://contador
                header("location:../../usuarios/contador/puntos-turista.php");
                break;
            default:
                header('Location:/login.php');
                break;
        }
    }else{
        //la sesion mensaje activa el mensaje si es incorrecta
        $_SESSION['mensaje']=1;
        header('Location:/login.php');
    }
}
//-------------------------------login de pagina principal---------------------------------------
if (isset($_POST['loguin-extern'])){

    //santiago123
    $pw2='$2y$10$044oFBTWJSpO0xU.VTqnQOpCZL0r0A.wwFxBRGKhWBRxRLMmxGbFO';

    $nombre =$ared->real_escape_string($_POST['usuario']);
    $contraseña=$ared->real_escape_string($_POST['contraseña']);

    session_start();
    $_SESSION['usuarioExterno']=$nombre;
    $_SESSION['passwordUser']=$contraseña;

    $consulta="SELECT Nombre,Contraseña FROM registro_turista WHERE Nombre='$nombre' and Contraseña=Contraseña";
    $resultado= mysqli_query($ared,$consulta);
    $filas= mysqli_fetch_array($resultado);
   // $_SESSION['NombreUsuarioExterno']=$filas['Nombre'];
   //$_SESSION['contraseñaUsuarioExterno']=$filas['Contraseña'];

   $hash_verify=password_verify($contraseña,$filas['Contraseña']);

      //verificamos que la contraseña ingresada sea igual a la guardada
        if($hash_verify){
           header('Location:../../PaginaPrincipal/login/puntos.php');    
        }else{
            //la sesion mensaje activa el mensaje si es incorrecta
            $_SESSION['mensajeUno']=1;
            echo (header('Location:../../PaginaPrincipal/login/login.php'));
            session_destroy($_SESSION['mensajeUno']);
        }
}
?>