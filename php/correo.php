<?php include '../php/puntos-turista-bd.php';
//ver video:https://www.youtube.com/watch?v=pn2v9lPakHQ

//guardar: correo 
if (isset($_POST['boton'])) {
    $correo=$_POST['correo'];

 //validar correo existente     
echo (filter_var($correo[1], FILTER_VALIDATE_EMAIL) ? 'Es email' : 'No es email').PHP_EOL;

 //correo activo
  $boton = 1;

  //insertar datos en la tabla
  $lista = "INSERT INTO Correo (Id_correo, correo, Activo, Id_turista) 
  VALUES ('','$correo','$boton',NULL)";
  $resultado = mysqli_query($ared,$lista) or die("error:". mysqli_error($ared));

  //comprobamos que el resulatado sea correcto para recargar la pagina con header 
  if ($resultado) {
<<<<<<< HEAD
    header("location:.../Index.php");
=======
<<<<<<< HEAD
    header("location:../Index.php");
=======
<<<<<<< HEAD
    header("location:../Index.php");
=======
<<<<<<< HEAD
    header("location:../Index.php");
=======
    header("location:/Trabajo Sena/SENA/Index.php");
>>>>>>> e25be13d660ca10dee4791c05b8a23b5f7f7ee74
>>>>>>> d9d0045b7a126d1d3159cbc59e2e40dbbc0100d9
>>>>>>> 12af2e34aa95221cb6e9e31341951a9a438141f8
>>>>>>> f48882082773e3a22af3e8ba6fed53ad7d8effa0
}else {
    echo 'mal';
}
}
?>

