<?php include '../php/puntos-turista-bd.php';
//programación de boton de promocion
if (isset($_GET['Id_promocion'])) {
    $id=$_GET['Id_promocion'];

    $cons= "Select Rutas FROM promociones  WHERE Id_promocion ='$Id'";
    $resultado = mysqli_query($ared,$cons)or die("error:". mysqli_error($ared));

<<<<<<< HEAD
    header('Location: ../PaginaPrincipal/promo.php');
=======
    header('Location: /Trabajo Sena/SENA/PaginaPrincipal/promo.php');
>>>>>>> e25be13d660ca10dee4791c05b8a23b5f7f7ee74
    }
        
     else {
        echo "mal";
    }
?>