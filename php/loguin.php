<?php 
include '/xampp/xampp/htdocs/360/ruta360/php/puntos-turista-bd.php';
if (isset($_POST['loguin'])){
    $nombre = $_POST['username'];
    $contraseña=$_POST['password'];
    session_start();
    
    $consulta="SELECT Nombre,Contraseña,Id_cargo FROM empleados WHERE Nombre='$nombre'";
    $resultado= mysqli_query($ared,$consulta);
    $filas= mysqli_num_rows($resultado);

   if ($filas==1) { //gerente
     $row=$resultado ->fetch_assoc();
     $pass_bd = $row['Contraseña'];
     $pass = $contraseña;
     if ($pass_bd == $pass) {
      $_SESSION['username'] = $row['Nombre'];
      $_SESSION['Id_cargo']=$row['Id_cargo'];
        header("location:/usuarios/gerente/reservaciones.php");
    }
  }else
     if ($filas==2) {//asesor
         $row=$resultado ->fetch_assoc();
         $pass_bd = $row['Contraseña'];
         $pass = $contraseña;
           if ($pass_bd == $pass) {
              $_SESSION['username'] = $row['Nombre'];
               $_SESSION['Id_cargo']=$row['Id_cargo'];
               header("location:/usuarios/asesor/reservaciones.php");
            }

  }else
     if ($filas==3) {//contador
         $row=$resultado ->fetch_assoc();
         $pass_bd = $row['Contraseña'];
         $pass = $contraseña;
           if ($pass_bd == $pass) {
               $_SESSION['username'] = $row['Nombre'];
               $_SESSION['Id_cargo']=$row['Id_cargo'];
               header("location:/usuarios/contador/puntos-turista.php");
   }
  }else{
    echo "usuario no existe".  mysqli_error($ared); 
  }
}
?>