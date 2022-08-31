<?php 
include '../php/puntos-turista-bd.php';

//include_once '../../php/puntos-turista-bd.php';
//require '../../php/puntos-turista-bd.php';

if (isset($_POST['loguin'])){
    $nombre = $_POST['username'];
    $contraseña=$_POST['password'];
    $row1="Administrador";
    $row2="Asesor";
    $row3="Contador";
    session_start();
    $_SESSION['Nombre']=$nombre;
    $_SESSION['admin']=$admin;
    $_SESSION['ase']=$row2;
    $_SESSION['cont']=$cont;


    $consulta="SELECT Nombre,Contraseña,Id_cargo FROM empleados WHERE Nombre='$nombre' and Contraseña='$contraseña'";
    $resultado= mysqli_query($ared,$consulta);
    $filas= mysqli_fetch_array($resultado);

    $_SESSION['Id_cargo']=$filas['Id_cargo'];
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
            //default:
                //header('Location:/login.php'); 
                //break;
        }
        if(!$filas['Id_cargo']){
    
            header('Location:../../login.php');    
        }
}
//-------------------------------login de pagina principal---------------------------------------
if (isset($_POST['loguin-extern'])){
    $nombre = $_POST['username'];
    $contraseña=$_POST['password'];
    session_start();
    $_SESSION['usuarioExterno']=$nombre;
    $_SESSION['passwordUser']=$contraseña;

    $consulta="SELECT Nombre,Contraseña FROM registro_turista WHERE Nombre='$nombre' and Contraseña='$contraseña'";
    $resultado= mysqli_query($ared,$consulta);
    $filas= mysqli_fetch_array($resultado);
    $_SESSION['NombreUsuarioExterno']=$filas['Nombre'];
    $_SESSION['contraseñaUsuarioExterno']=$filas['Contraseña'];
        if($contraseña==$filas['Contraseña']){
            header('Location:../../PaginaPrincipal/login/puntos.php');    
        }else{
            echo '<script>
            var opcion = confirm("Usuario o Contraseña Incorrecta ");
            if (opcion == true) {
                window.location.href = "/PaginaPrincipal/login/login.php";
            } else {
            window.location.href = "/PaginaPrincipal/login/login.php";
            }
            </script>';
        }
}
?>