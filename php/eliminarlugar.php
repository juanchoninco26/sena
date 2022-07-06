<<<<<<< HEAD
<?php include '../php/puntos-turista-bd.php';
=======
<?php include '/xampp/htdocs/Trabajo Sena/SENA/php/bd.php';
>>>>>>> e25be13d660ca10dee4791c05b8a23b5f7f7ee74
//eliminar paquete
if (isset($_GET['Cod_paquete'])) {
    $id=$_GET['Cod_paquete'];

    $elim= "DELETE FROM paquetes_turisticos  WHERE Cod_paquete ='$cod'";
    $resultado = mysqli_query($ared,$elim)or die("error:". mysqli_error($ared));

<<<<<<< HEAD
    header('Location: ../PaginaPrincipal/Pago.php');
=======
    header('Location: /Trabajo Sena/SENA/PaginaPrincipal/Pago.php');
>>>>>>> e25be13d660ca10dee4791c05b8a23b5f7f7ee74
    }
        
     else {
        echo "mal";
    }


?>