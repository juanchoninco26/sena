<?php 
include '../php/puntos-turista-bd.php';
session_start();
//ver video:https://www.youtube.com/watch?v=pn2v9lPakHQ

//----------------------variables globales------------------------

//----------------------------------------------------------------

//reservaciones:reservas pendientes 
if (isset($_POST['reprogramar'])){
    $reprogramar=$_POST['reprogramar'];
    $reserva=$_POST['reserva'];

    $lista="UPDATE reservas SET reprogramar='$reprogramar' WHERE id_turista	 = '".$_SESSION['id-turista']."'";
    $resultado=mysqli_query($ared,$lista) or die("error:". mysqli_error($ared));

    if ($resultado) {
        if ($_SESSION['Id_cargo'] ==1){
            header('Location: /usuarios/gerente/reservaciones.php');
        }
        if ($_SESSION['Id_cargo'] ==2){
            header('Location: /usuarios/asesor/reservaciones.php');
        }
        if ($_SESSION['Id_cargo'] ==3){
            header('Location: /usuarios/contador/reservaciones.php');
        }
        
    }else {
        echo 'mal';
    }
}
if (isset($_POST['click'])){
    $lista="UPDATE reservas SET reprogramar='$reprogramar' WHERE id_reservas = '$reserva'";
    $resultado=mysqli_query($ared,$lista) or die("error:". mysqli_error($ared));
}

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
    VALUES (NULL,'$nombre','$desc1','$desc2','$precio',/*POINT ''*/NULL,'$punto',NULL)";
    $resultado = mysqli_query($ared,$lista) or die("error:". mysqli_error($ared));
    
    //comprobamos que el resulatado sea correcto para recargar la pagina con header 
    if ($resultado) {
        if ($_SESSION['Id_cargo'] ==1){
            header('Location: /usuarios/gerente/editar-sitios.php');
        }
        if ($_SESSION['Id_cargo'] ==2){
            header('Location: /usuarios/asesor/editar-sitios.php');
        }
        if ($_SESSION['Id_cargo'] ==3){
            header('Location: /usuarios/contador/editar-sitios.php');
        }
        
    }else {
        echo 'mal';
    }
}
//guardar: editar sitios - editar paquetes
if (isset($_POST['paquetes'])){
   $id=$_POST['id'];
   $nombre=$_POST['nombre'];
   $rutas=$_POST['rutas'];
   $costo=$_POST['precio'];
   $descripcion=$_POST['descripcion'];
   $puntos=$_POST['puntos'];

   $lista="UPDATE paquetes_turisticos SET Nombre='$nombre', Rutas='$rutas', Costo='$costo',Descripcion='$descripcion',Punto_paquete='$puntos' WHERE Cod_paquete='$id'";
   $resultado=mysqli_query($ared,$lista) or die("error:". mysqli_error($ared));
   if ($resultado){
       header('Location: /php/vista/editar-paquete-turista.php');
   }


}
//guardar:promociones
if (isset($_POST['promociones'])){
    
    $Titulo=$_POST['titulo'];
    $Descripcion_corta=$_POST['desc-corta'];
    $Descripcion_larga=$_POST['desc-larga'];
    $Fotografia_referencia=$_POST['foto'];
    $Rutas=$_POST['rutas'];
    $fotografia=$_POST['foto'];
    $Porcentaje_descuento=$_POST['%desc'];

    $file = $_FILES['foto'];
    $name = $file['name'];
    $tipo = $file['type'];
    $tamano = $file['size'];
    $ruta = $file["tmp_name"];
    $dimension = getimagesize($ruta);
    $width = $dimension[0];
    $height = $dimension[1];
    $carpeta = "../img_promociones";
    $carpeta2="/img_promociones";
    if ($tipo != "image/jpg" && $tipo != "image/JPG" && $tipo != "image/jpeg" && $tipo != "image/png") {
        echo "el archivo subido no es una foto";
    } else if ($tamano > 3 * 1024 * 1024) {
        echo "el tamaño debe ser menor a 3MB";
    } else {
        $src = "$carpeta/$name";
        move_uploaded_file($ruta, $src);
        $fotografia = "$carpeta2/$name";
    }
   
    $lista="INSERT INTO promociones(Id_promocion, Titulo, Descripcion_corta, Descripcion_larga, Fotografia_referencia, Rutas, Foto, Id_empleado, id_turista, Porcentaje_descuento) 
    VALUES(NULL,'$Titulo','$Descripcion_corta','$Descripcion_larga','$fotografia','$Rutas',NULL,NULL,NULL,'$Porcentaje_descuento')";
    $resultado= mysqli_query($ared,$lista) or die("error:". mysqli_error($ared));

    if ($resultado) {
        if ($_SESSION['Id_cargo'] ==1){
            header('Location: /usuarios/gerente/promociones.php');
        }
        if ($_SESSION['Id_cargo'] ==2){
            header('Location: /usuarios/asesor/promociones.php');
        }
        if ($_SESSION['Id_cargo'] ==3){
            header('Location: /usuarios/contador/promociones.php');
        }
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
       if ($_SESSION['Id_cargo'] ==1){
        header('Location: /usuarios/gerente/puntos-turista.php');
       }
       if ($_SESSION['Id_cargo'] ==2){
        header('Location: /usuarios/asesor/puntos-turista.php');
       }
       if ($_SESSION['Id_cargo'] ==3){
        header('Location: /usuarios/contador/puntos-turista.php');
       }
       
   }else{ 
   echo 'mal';
 }
}

//guardar:crear usuario

if(isset($_POST['crear_usuario'])){
    $nombre=$_POST['nombre'];
    $contraseña=$_POST['contraseña'];
    $nacimiento=$_POST['edad'];
    $telefono=$_POST['telefono'];
    $cargo=$_POST['cargo'];
    $fotografia="";
    if(isset ($_FILES['foto'])){
       //como subir foto al servidor: https://www.youtube.com/watch?v=zFqOFTTQs20
        $file=$_FILES['foto'];
        $name=$file['name'];
        $tipo=$file['type'];
        $tamano=$file['size'];
        $ruta=$file["tmp_name"];
        $dimension=getimagesize($ruta);
        $width=$dimension[0];
        $height=$dimension[1];
        $carpeta="../avatar";
        $carpeta2="/avatar";
        if($tipo != "image/jpg" && $tipo != "image/JPG" && $tipo != "image/jpeg" && $tipo != "image/png"){
            echo "el archivo subido no es una foto";
        }else if($tamano > 3*1024*1024){
            echo "el tamaño debe ser menor a 3MB";
        }else{
            $src = "$carpeta/$name";
            move_uploaded_file($ruta,$src);
            $fotografia="$carpeta2/$name";
        }
    }

    $lista="INSERT INTO empleados(Id_empleado, Nombre, Contraseña, Fecha_nacimiento, Telefono, Fotografia, Id_cargo) 
    VALUES ('', '$nombre', '$contraseña', '$nacimiento', '$telefono', '$fotografia', '$cargo')";
    $resultado= mysqli_query($ared,$lista) or die ("error: ". mysqli_error($ared));

    if ($resultado){
        $nombre1= $_SESSION['Nombre'];
        $consulta="SELECT *FROM empleados where Nombre='$nombre1'";
        $cons=mysqli_query($ared,$consulta);
        $rows=mysqli_fetch_array($cons);
        if($rows['Id_cargo']==1){
            header('Location: /usuarios/gerente/crear-usuario.php');
        }
        if($rows['Id_cargo']==2){
            header('Location: /usuarios/asesor/crear-usuario.php');
        }
        if($rows['Id_cargo']==3){
            header('Location: /usuarios/contador/crear-usuario.php');
        }
        
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
    $correo=$ared->real_escape_string($_POST['correo']);
    $fotografia=$_POST['foto'];
     //youtube.com/watch?v=Ct6K4wRjlQQ
    
    if ($contraseña==$contraseña2){
        //como subir foto al servidor: https://www.youtube.com/watch?v=zFqOFTTQs20
        $file = $_FILES['foto'];
        $name = $file['name'];
        $tipo = $file['type'];
        $tamano = $file['size'];
        $ruta = $file["tmp_name"];
        $dimension = getimagesize($ruta);
        $width = $dimension[0];
        $height = $dimension[1];
        $carpeta = "../avatar";
        $carpeta2="/avatar";
        if ($tipo != "image/jpg" && $tipo != "image/JPG" && $tipo != "image/jpeg" && $tipo != "image/png") {
            echo "el archivo subido no es una foto";
        } else if ($tamano > 3 * 1024 * 1024) {
            echo "el tamaño debe ser menor a 3MB";
        } else {
            $src = "$carpeta/$name";
            move_uploaded_file($ruta, $src);
            $fotografia = "$carpeta2/$name";
        }
        
        $nombre1= $_SESSION['Nombre'];
        $lista="UPDATE empleados SET Nombre = '$nombre', Contraseña='$contraseña', Fecha_nacimiento='$fecha', Telefono='$telefono', Fotografia='$fotografia', correo='$correo' WHERE  Id_empleado = '$cedula'"; 
        $resultado= mysqli_query($ared,$lista) or die ("error: ". mysqli_error($ared));

        if ($resultado) {
            session_unset();
            session_destroy();
            header("location:/login.php");
         }else{
            echo "error". mysqli_error($ared);
        }
        
    }else{
        $nombre1= $_SESSION['Nombre'];
        $consulta="SELECT *FROM empleados where Nombre='$nombre1'";
        $cons=mysqli_query($ared,$consulta);
        $rows=mysqli_fetch_array($cons);
        if($rows['Id_cargo']==1){
            echo "<script src='/script/mensaje1.js'></script>";
        }
        if($rows['Id_cargo']==2){
            echo "<script src='/script/mensaje2.js'></script>";
        }
        if($rows['Id_cargo']==3){
            echo "<script src='/script/mensaje3.js'></script>";
        }
        
    } 
}

//--------------------- pagina principal ---------------------

//registro
if(isset($_POST['registrarse'])){
    $nombre=$ared->real_escape_string($_POST['nombre']);
    $correo=$ared->real_escape_string($_POST['correo']);
    $identifiacion=$ared->real_escape_string($_POST['identificacion']);
    $contraseña=$ared->real_escape_string($_POST['contraseña']);
    $repContraseña=$ared->real_escape_string($_POST['repContraseña']);

    $lista="INSERT INTO registro_turista(id_turista,Nombre,Contraseña,Fecha_nacimiento,Telefono,Correo_electronico,Fotografia,Puntos_acumulados) 
    VALUES ('$identifiacion','$nombre','$contraseña','','','','','')";
    $resultado= mysqli_query($ared,$lista) or die ("error: ". mysqli_error($ared));

    if ($resultado) {

        header('Location: /PaginaPrincipal/login/registrarse.php');
    }
}

//editar perfil usuario web
if (isset($_POST['editar_usuario'])){
    $nombre=$ared->real_escape_string($_POST['nombre']);
    $cedula=$ared->real_escape_string($_POST['cedula']);
    $contraseña=$ared->real_escape_string($_POST['contraseña']);
    $contraseña2=$ared->real_escape_string($_POST['repcontraseña']);
    $fecha=$ared->real_escape_string($_POST['edad']);
    $telefono=$ared->real_escape_string($_POST['telefono']);
    $correo=$ared->real_escape_string($_POST['correo']);
    $fotografia=$_POST['foto'];
     //youtube.com/watch?v=Ct6K4wRjlQQ
    
    if ($contraseña==$contraseña2){
        //como subir foto al servidor: https://www.youtube.com/watch?v=zFqOFTTQs20
        $file = $_FILES['foto'];
        $name = $file['name'];
        $tipo = $file['type'];
        $tamano = $file['size'];
        $ruta = $file["tmp_name"];
        $dimension = getimagesize($ruta);
        $width = $dimension[0];
        $height = $dimension[1];
        $carpeta = "../avatar";
        $carpeta2="/avatar";
        if ($tipo != "image/jpg" && $tipo != "image/JPG" && $tipo != "image/jpeg" && $tipo != "image/png") {
            echo "el archivo subido no es una foto";
        } else if ($tamano > 3 * 1024 * 1024) {
            echo "el tamaño debe ser menor a 3MB";
        } else {
            $src = "$carpeta/$name";
            move_uploaded_file($ruta, $src);
            $fotografia = "$carpeta2/$name";
        }
        
        $nombre1= $_SESSION['Nombre'];
        $lista="UPDATE registro_turista SET Nombre = '$nombre', Contraseña='$contraseña', Fecha_nacimiento='$fecha', Telefono='$telefono', Fotografia='$fotografia', Correo_electronico='$correo' WHERE  id_turista = '$cedula'"; 
        $resultado= mysqli_query($ared,$lista) or die ("error: ". mysqli_error($ared));

        if ($resultado) {
            session_unset();
            session_destroy();
            header("location:/PaginaPrincipal/login/login.php");
         }else{
            echo "error". mysqli_error($ared);
        }
        
    }else{
        $nombre1= $_SESSION['Nombre'];
        $consulta="SELECT *FROM registro_turista where Nombre='$nombre1'";
        $cons=mysqli_query($ared,$consulta);
        $rows=mysqli_fetch_array($cons);
        if($rows['Id_cargo']==$rows['Id_cargo']){
            echo "<script src='/script/mensaje1.js'></script>";
        }
        
    } 
}
if(isset($_POST['volverSitios'])){
    switch ($_SESSION['Id_cargo']) {
        case 1:
            header("Location:/usuarios/gerente/editar-sitios.php");
            break;
        case 2:
            header("Location:/usuarios/asesor/editar-sitios.php");
            break;
        default:
        header('Location:/login.php'); 
            break;
    }
}
?>