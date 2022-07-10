<?php 
function cargo(){
include '../../php/puntos-turista-bd.php';
$nombre1= $_SESSION['Nombre'];
$consulta="SELECT *FROM empleados where Nombre='$nombre1'";
$cons=mysqli_query($ared,$consulta);
$rows=mysqli_fetch_array($cons);
    if ($rows['Id_cargo'] == 1) {
        echo "Gerente";
    }
    if ($rows['Id_cargo'] == 2) {
        echo "Asesor";
    }
    if ($rows['Id_cargo'] == 3) {
        echo "Contador";
    }
}
?>