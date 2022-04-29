<?php 
include '/xampp/xampp/htdocs/360/ruta360/php/puntos-turista-bd.php';
//eliminar: editar sitios 
if (isset($_GET['Cod_lugar_turistico'])){
    $id=$_GET['Cod_lugar_turistico'];
    
    $query ="DELETE FROM lugares_turisticos WHERE  Cod_lugar_turistico='$id'";
    $resultado = mysqli_query($ared,$query) or die("error:". mysqli_error($ared));
    
    if ($ared-> query($query)==true) {
        /*header( "refresh: /usuarios/gerente/editar-sitios.php" );*/
        header('Location: /usuarios/gerente/editar-sitios.php');
    } else {
       die('error:'. $ared ->error);
        }
}


// eliminar: crear usuario
if(isset($_GET['Id_empleado'])){
        $id=$_GET['Id_empleado'];
    
        $elim="DELETE FROM empleados WHERE Id_empleado = '$id'";
        $resultado = mysqli_query($ared,$elim);
    
        if ($resultado) {
            //echo "bien";
            header('Location: /usuarios/gerente/crear-usuario.php');
        }
        else{
            echo "error";
        }
}

//eliminar: promociones
if (isset($_GET['Id_promocion'])) {
    $id=$_GET['Id_promocion'];

    $elim= "DELETE FROM promociones WHERE Id_promocion ='$id'";
    $resultado = mysqli_query($ared,$elim)or die("error:". mysqli_error($ared));

    if ($resultado) {
        //echo "bien";
        header('Location: /usuarios/gerente/promociones.php');
    }else {
        echo "mal";
    }
}
?>