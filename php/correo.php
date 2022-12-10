<?php include '../php/puntos-turista-bd.php';
//ver video:https://www.youtube.com/watch?v=pn2v9lPakHQ

//guardar: correo 
if (isset($_POST['boton'])) {
    $correo=$_POST['correo'];

 //validar correo existente     
echo (filter_var($correo[1], FILTER_VALIDATE_EMAIL) ? 'Es email' : 'No es email').PHP_EOL;

 //id del correo
  $email  = 'priyank@geeks.com';
  $username = strstr($email, '@', true);
  echo $username."\n";

 $boton=1;

  //insertar datos en la tabla
  $lista = "INSERT INTO Correo (Id, correo, Activo, Id_turista) 
  VALUES ('$username','$correo','$boton',NULL)";
  $resultado = mysqli_query($ared,$lista) or die("error:". mysqli_error($ared));

  //comprobamos que el resulatado sea correcto para recargar la pagina con header 
  if ($resultado) {
    header("location:../Index.php");

} else {
    echo 'mal';
}
}
?>

