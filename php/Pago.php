<?php include '/xampp/htdocs/ruta360/php/bd.php';
//ver video:https://www.youtube.com/watch?v=pn2v9lPakHQ

//guardar: formulario para pago
if (isset($_POST['Pago'])) {
    $correo=$_POST[''];
    $activo=$_POST[''];


  //insertar datos en la tabla
  $lista = "INSERT INTO Pago (Id_pago,Cod_paquete, Fecha,Hora,Numero_personas,Total,Cod_descuento) 
  VALUES (NULL,'$correo','$activo',NULL)";
  $resultado = mysqli_query($ared,$lista) or die("error:". mysqli_error($ared));

  //comprobamos que el resulatado sea correcto para recargar la pagina con header 
  if ($resultado) {
    header('Location /');
}else {
    echo 'mal';
}
}

?>
