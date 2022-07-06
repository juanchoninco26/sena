<<<<<<< HEAD
<?php include '../php/puntos-turista-bd.php';
=======
<<<<<<< HEAD
<?php include '../php/puntos-turista-bd.php';
=======
<<<<<<< HEAD
<?php include '../php/puntos-turista-bd.php';
=======
<?php include '/xampp/htdocs/Trabajo Sena/SENA/php/bd.php';
>>>>>>> e25be13d660ca10dee4791c05b8a23b5f7f7ee74
>>>>>>> d9d0045b7a126d1d3159cbc59e2e40dbbc0100d9
>>>>>>> 12af2e34aa95221cb6e9e31341951a9a438141f8
//eliminar paquete
if (isset($_GET['Cod_paquete'])) {
    $id=$_GET['Cod_paquete'];

    $elim= "DELETE FROM paquetes_turisticos  WHERE Cod_paquete ='$cod'";
    $resultado = mysqli_query($ared,$elim)or die("error:". mysqli_error($ared));

<<<<<<< HEAD
    header('Location: ../PaginaPrincipal/Pago.php');
=======
<<<<<<< HEAD
    header('Location: ../PaginaPrincipal/Pago.php');
=======
<<<<<<< HEAD
    header('Location: ../PaginaPrincipal/Pago.php');
=======
    header('Location: /Trabajo Sena/SENA/PaginaPrincipal/Pago.php');
>>>>>>> e25be13d660ca10dee4791c05b8a23b5f7f7ee74
>>>>>>> d9d0045b7a126d1d3159cbc59e2e40dbbc0100d9
>>>>>>> 12af2e34aa95221cb6e9e31341951a9a438141f8
    }
        
     else {
        echo "mal";
    }


?>