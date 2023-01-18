<?php 
    include 'php/puntos-turista-bd.php';
    session_start();
    $nombre1 = $_SESSION['Nombre'];

    $arreglo=new stdClass();
    $arreglo->cargo ="Gerente";
    $arreglo->usuario="$nombre1";

    //se redireccionara al susario segun su cargo 
    
    $consulta = "SELECT *FROM empleados where Nombre='admin'";
    $cons = mysqli_query($ared, $consulta);
    $array= array();
    $rows = mysqli_fetch_array($cons);
    if ($rows['Id_cargo'] == 1) {
        $array[]=$arreglo;
        echo json_encode($array);
    }
    if ($rows['Id_cargo'] == 2) {
        echo "Asesor";
    }
    if ($rows['Id_cargo'] == 3) {
        echo "Contador";
    }
?>