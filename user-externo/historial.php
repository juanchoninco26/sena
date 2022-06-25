<?php include '../php/puntos-turista-bd.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/estilos/user-externo/men-user-extern.css" rel="stylesheet" type="text/css">
    <link href="/estilos/user-externo/historial.css" rel="stylesheet" type="text/css">
    <title>Historial</title>
</head>
<body>
  <div class="menu">
    <?php 
    include '/xampp/xampp/htdocs/360/ruta360/php/include/men-user-extern.php';
    ?>
  </div>
  <div class="contenedor1">
    <div class="caja1">
          <div class="titulo">
              <p>sitios visitados</p>
          </div>
          <div class="lista">
            <ol>
              <?php 
                 $consult ="SELECT * FROM paquetes_turisticos"; 
                 $resutados = mysqli_query($ared, $consult);
             
                 while ($mostrar = mysqli_fetch_array($resutados)) {?>

              <li><p><?php echo $mostrar['Nombre'];?></p><a href="">usar</a></li>
              <?php } ?>
            </ol>
          </div>
      </div>
    </div>
  <div class="contenedor2">
  <div class="info">
      <div class="usuario">
        <h3>usuario</h3>
        <p>nombre</p>
      </div>
      <div class="foto">
        <img src="/imagenes/user.svg" alt="">
      </div>
    </div>
    <div class="caja2">
          <div class="titulo2">
              <p>Paquetes usados</p>
          </div>
          <div class="lista2">
            <ol>
            <?php 
                 $consult ="SELECT * FROM paquetes_turisticos"; 
                 $resutados = mysqli_query($ared, $consult);
             
                 while ($mostrar = mysqli_fetch_array($resutados)) {?>
              <li><p><?php echo $mostrar['Rutas'];?></p><a href="">abrir</a></li>
              <?php } ?>
            </ol>
          </div>
      </div>
   </div>
  </div>
</body>
</html>