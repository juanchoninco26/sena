<?php include '/xampp/htdocs/ruta360/php/bd.php';
//ver video:https://www.youtube.com/watch?v=pn2v9lPakHQ

//guardar: correo 
if (isset($_POST['boton'])) {
    $correo=$_POST['correo'];
     
echo (filter_var($correo[1], FILTER_VALIDATE_EMAIL) ? 'Es email' : 'No es email').PHP_EOL;
  

  //insertar datos en la tabla
  $lista = "INSERT INTO Correo (Id_correo, correo, Activo, Id_turista) 
  VALUES ('','$correo','',NULL)";
  $resultado = mysqli_query($ared,$lista) or die("error:". mysqli_error($ared));

  //comprobamos que el resulatado sea correcto para recargar la pagina con header 
  if ($resultado) {
    header("location:/ruta360/usuarios/PaginaPrincipal/Paginaphp/Index.php");
}else {
    echo 'mal';
}
}
?>

