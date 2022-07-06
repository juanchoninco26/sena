<<<<<<< HEAD
<?php include '../../php/puntos-turista-bd.php'; ?>
=======
<?php include '../../php/puntos-turista-bd.php'; 
session_start();
?>
>>>>>>> 12af2e34aa95221cb6e9e31341951a9a438141f8
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/estilos/user-externo/men-user-extern.css" rel="stylesheet" type="text/css">
    <link href="/estilos/user-externo/puntos.css" rel="stylesheet" type="text/css">
    <title>Puntos</title>
</head>
<body class="body">
  <div class="menu">
    <?php 
    include '/xampp/xampp/htdocs/360/ruta360/php/include/men-user-extern.php';
    ?>
  </div>
  <div class="contenedor1">
      <div class="caja1">
          <div class="titulo">
              <p>Puntos en sitios visitados</p>
          </div>
          <div class="lista">
            <ol>
              <?php 
                $consult ="SELECT * FROM generarpuntos"; 
                $resutados = mysqli_query($ared, $consult);
              
                while ($mostrar = mysqli_fetch_array($resutados)) {?>

              <li><p><?php echo $mostrar['puntos_manualmente'];?></p><a href="/php/--.php?id=<?php echo $mostrar['Cod_descuento'];?>">usar</a></li>

              <?php } ?>
            </ol>
          </div>
      </div>
      <br>
      <div class="caja2">
        <div class="parrafo">
          <p>Usar puntos acomulados (12 sitios)</p>
        </div>
      </div>
  </div>
  <div class="contenedor2">
    <div class="info">
      <div class="usuario">
<<<<<<< HEAD
        <h3>usuario</h3>
        <p>nombre</p>
=======
      <?php 
              echo "<h3>usuario</h3>";
                if($nombre=$_SESSION['Nombre']){
                   echo "<p>$nombre</p>";
                }
            ?>
>>>>>>> 12af2e34aa95221cb6e9e31341951a9a438141f8
      </div>
      <div class="foto">
        <img src="/imagenes/user.svg" alt="">
      </div>
    </div>
    <div class="codigo">
      <div class="tex">
        <p class="p">Codigo del punto</p>
        <?php 
          $consult ="SELECT * FROM generarpuntos"; 
          $resutados = mysqli_query($ared, $consult);
          if ($mostrar = mysqli_fetch_array($resutados)) {?>
        <p class="p2"><?php echo $mostrar['Cod_descuento'];?></p>
        <?php } ?>
        <p class="p3">Puedes uzar este codigo de descuento en cualquiera de nuestros sitios o paquetes.<br> <strong>No es reutilizable.</strong></p>
      </div>
    </div>
    <br>
    <div class="sitio">
      <div class="formulario">
        <?php 
          $result =mysqli_query($ared, "SELECT Cod_lugar_turistico,Nombre FROM lugares_turisticos");
        ?>
        <form action="/php/confirmar.php" class="form" method="POST">
         <p>Seleccionar sitio</p>
         <select name="sitio" id="selectSitio">
          <?php 
            while ($fila = $result->fetch_assoc()):
              $id = $fila['Cod_lugar_turistico'];
              $nombre=$fila['Nombre'];
              echo "<option value=$id>$nombre</option>";
            endwhile;
          ?>
         </select>
         <p>Seleccionar paquete</p>
         <?php 
          $result =mysqli_query($ared, "SELECT Cod_paquete,Nombre FROM paquetes_turisticos");
        ?>
         <select name="paquetes" id="">
          <?php 
            while ($fila = $result->fetch_assoc()):
              $id = $fila['Cod_paquete'];
              $nombre=$fila['Nombre'];
              echo "<option value=$id>$nombre</option>";
            endwhile;
          ?>
         </select>
         <br>
         <br>
         <div class="enviar">
           <input type="button" value="Enviar" id="botonEnviar">
         </div>
       </form>
      </div>
    </div>
  </div>
</body>
</html>