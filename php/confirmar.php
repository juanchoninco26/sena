<?php 
include '../php/puntos-turista-bd.php';
session_start();
//reservaciones:confirmar
if (isset($_GET['confirmar'])){
    $id=$_GET['confirmar'];
    $fecha=$_GET['reprogramar'];

    $reservas=$_SESSION['reservas'];
    $query ="UPDATE reservas SET confirmar=1 WHERE id_reservas='$reservas'";
    $resultado = mysqli_query($ared,$query) or die("error:". mysqli_error($ared));
    
    if ($ared-> query($query)==true) {
        if ($_SESSION['Id_cargo'] ==1){
            header('Location: /usuarios/gerente/reservaciones.php');
        }
        if ($_SESSION['Id_cargo'] ==2){
            header('Location: /usuarios/asesor/reservaciones.php');
        }
        if ($_SESSION['Id_cargo'] ==3){
            header('Location: /usuarios/contador/reservaciones.php');
        }
    } else {
       die('error:'. $ared ->error);
    }
}
//reprogramar
if (isset($_GET['reprogramar'])){
    $id=$_GET['reprogramar'];
    $query ="DELETE FROM reservas WHERE  reprogramar='$id'";
    $resultado = mysqli_query($ared,$query) or die("error:". mysqli_error($ared));
    
    if ($ared-> query($query)==true) {
        if ($_SESSION['Id_cargo'] ==1){
            header('Location: /usuarios/gerente/reservaciones.php');
        }
        if ($_SESSION['Id_cargo'] ==2){
            header('Location: /usuarios/asesor/reservaciones.php');
        }
        if ($_SESSION['Id_cargo'] ==3){
            header('Location: /usuarios/contador/reservaciones.php');
        }
    } else {
       die('error:'. $ared ->error);
    }
}
?>