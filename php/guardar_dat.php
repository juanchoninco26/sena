<?php 
include '/xampp/xampp/htdocs/360/ruta360/php/puntos-turista-bd.php';

//ver video:https://www.youtube.com/watch?v=pn2v9lPakHQ

//guardar: editar sitios 
if (isset($_POST['editar-sitios'])) {
    $nombre=$_POST['nombre'];
    $desc1=$_POST['desc-corta'];
    $desc2=$_POST['desc-larga'];
    $punto=$_POST['Punto_lugar'];
    $precio=$_POST['precio'];
    $ubicacion=$_POST['ubicacion'];

    //insertar datos en la tabla
    $lista = "INSERT INTO lugares_turisticos (Cod_lugar_turistico, Nombre, Descripcion_corta , Descripcion_larga , Precio, Ubicacion , Punto_lugar , Id_turista) 
    VALUES (NULL,'$nombre','$desc1','$desc2','$precio',/*POINT ''*/ NULL,'$punto','1004146970')";
    $resultado = mysqli_query($ared,$lista) or die("error:". mysqli_error($ared));

    //comprobamos que el resulatado sea correcto para recargar la pagina con header 
    if ($resultado) {
        header('Location: /usuarios/gerente/editar-sitios.php');
    }else {
        echo 'mal';
    }
}
//guardar: editar sitios - editar paquetes
if (isset($_POST['paquetes'])){
   $nombre=$_POST['nombre'];
   $turista=$_POST['turista'];
   $rutas=$_POST['rutas'];
   $precio=$_POST['precio'];
   $puntos=$_POST['puntos'];
   $descripcion=$_POST['descripcion'];

   $lista="INSERT INTO paquetes_turisticos(Cod_paquete,Nombre,Rutas,Costo,Descripcion,Punto_paquete,Id_turista) 
   VALUES('','$nombre','$rutas','$precio','$descripcion','$puntos','$turista')";
   $resultado=mysqli_query($ared,$lista) or die("error:". mysqli_error($ared));
   if ($resultado){
       echo "<script>alert('hola')</script>";
   }


}
//guardar:promociones
if (isset($_POST['promociones'])){
    
    $Titulo=$_POST['titulo'];
    $Descripcion_corta=$_POST['desc-corta'];
    $Descripcion_larga=$_POST['desc-larga'];
    $Fotografia_referencia=$_POST['foto'];
    $Rutas=$_POST['rutas'];
    $Foto=$_POST['foto'];
    

    $Porcentaje_descuento=$_POST['%desc'];
   
    $lista="INSERT INTO promociones(Id_promocion, Titulo, Descripcion_corta, Descripcion_larga, Fotografia_referencia, Rutas, Foto, Id_empleado, id_turista, Porcentaje_descuento) 
    VALUES(NULL,'$Titulo','$Descripcion_corta','$Descripcion_larga','$Fotografia_referencia','$Rutas',NULL,NULL,NULL,'$Porcentaje_descuento')";
    $resultado= mysqli_query($ared,$lista) or die("error:". mysqli_error($ared));

    if ($resultado) {
        //echo "bien";
        header('Location: /usuarios/gerente/promociones.php');
    }else{
        echo "mal";
    }

}

//guardar:puntos turista
if (isset($_POST['guardar_punt'])){
    $turista=$_POST['usuario'];
    $puntos=$_POST['puntos'];
    $desc=$_POST['desc'];
    $acom=$_POST['acom'];
    $empleado="1056702531";
   

   //insertar datos en la tabla generarpuntos
   $lista = "INSERT INTO generarpuntos(Cod_descuento,Id_turista,puntos_manualmente,Id_empleado,des_acomulado) 
    VALUES ('$desc','$turista','$puntos','$empleado','$acom')";
    $resultado = mysqli_query($ared,$lista) or die("error:". mysqli_error($ared));
    
    //comprobamos que el resulatado sea correcto para recargar la pagina con header 
   if ($resultado){
       //echo 'correcto';
       header('Location: /usuarios/gerente/puntos-turista.php');
   }else{ 
   echo 'mal';
 }
}

//guradar:crear usuario

if(isset($_POST['crear_usuario'])){
    $nombre=$_POST['nombre'];
    $contraseña=$_POST['contraseña'];
    $nacimiento=$_POST['edad'];
    $telefono=$_POST['telefono'];
    $cargo=$_POST['cargo'];
    $fotografia=$_POST['foto'];

    $lista="INSERT INTO empleados(Id_empleado, Nombre, Contraseña, Fecha_nacimiento, Telefono, Fotografia, Id_cargo) 
    VALUES ('', '$nombre', '$contraseña', '$nacimiento', '$telefono', NULL, '$cargo')";
    $resultado= mysqli_query($ared,$lista) or die ("error: ". mysqli_error($ared));

    if($resultado){
        echo "bien";
    }
}

//editar perfil
if (isset($_POST['editar_perfil'])){
    $nombre=$ared->real_escape_string($_POST['nombre']);
    $cedula=$ared->real_escape_string($_POST['cedula']);
    $contraseña=$ared->real_escape_string($_POST['contraseña']);
    $contraseña2=$ared->real_escape_string($_POST['repcontraseña']);
    $fecha=$ared->real_escape_string($_POST['edad']);
    $telefono=$ared->real_escape_string($_POST['telefono']);
    //$cargo=$ared->real_escape_string($_POST['cargo']);
    $foto=$ared->real_escape_string($_POST['foto']);
    
    //youtube.com/watch?v=Ct6K4wRjlQQ
    //$lista="SELECT * FROM empleados WHERE Id_empleado = $cedula";
    if ($contraseña==$contraseña2){
        session_start();
        $nombre1= $_SESSION['Nombre'];
        $lista="UPDATE empleados SET Nombre = '$nombre', Contraseña='$contraseña', Fecha_nacimiento='$fecha', Telefono='$telefono', Fotografia=NULL WHERE Id_empleado = '$cedula'"; 
        $resultado= mysqli_query($ared,$lista) or die ("error: ". mysqli_error($ared));

        if ($resultado) {
            echo "<script>";
           // echo "confirm('datos actualizados')";
            echo "</script>";
            //header("location:/login.php"); 
         }else{
            echo "error". mysqli_error($ared);
        }
        
    }else{
        //echo "<script >";
        echo "<script>";
        echo "let text;";
        echo "if (confirm('Press a button!') == true) {";
        echo "  text = 'You pressed OK!'; }";
        echo "</script>";
        //echo "</script>";
    } 
}
?>