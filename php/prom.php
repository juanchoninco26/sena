<?php include '../php/puntos-turista-bd.php';
//programación de boton de promocion
if (isset($_GET['Id_promocion'])) {
    $id=$_GET['Id_promocion'];

    $cons= "Select Rutas FROM promociones  WHERE Id_promocion ='$id'";
    $resultado = mysqli_query($ared,$cons)or die("error:". mysqli_error($ared));


    header('Location: ../PaginaPrincipal/promo.php');
    }
        
     else {
        echo "mal";
    }
?>