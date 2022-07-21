<?php include '../../php/puntos-turista-bd.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/estilos/user-externo/men-user-extern.css" rel="stylesheet" type="text/css">
  <link href="/estilos/user-externo/promociones.css" rel="stylesheet" type="text/css">
  <title>Promociones</title>
</head>

<body>
  <div class="menu-">
    <?php
    include '../../php/include/men-user-extern.php';
    ?>
  </div>
  <div class="seccion1">
    <div class="info-user">
      <div class="info">
        <div class="usuario">
          <?php
          echo "<h3>usuario</h3>";
          if ($nombre = $_SESSION['Nombre']) {
            echo "<p>$nombre</p>";
          }
          ?>
        </div>
        <div class="foto">
          <?php
          $nombre1 = $_SESSION['Nombre'];
          $result = $ared->query ("SELECT * FROM registro_turista WHERE Nombre = '$nombre1'");
          while ($mostrar = mysqli_fetch_array($result)) {
          ?>
            <img src="<?php echo $mostrar['Fotografia']; ?>" alt="">
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="contenedor">
      <div class="caja-card">
        <?php
        $consult = "SELECT * FROM promociones";
        $resutados = mysqli_query($ared, $consult);
        while ($mostrar = mysqli_fetch_array($resutados)) {
        ?>
          <div class="card">
            <div class="content1">
              <img src="<?php echo $mostrar['Fotografia_referencia'];?>" alt="">
              <p><?php echo $mostrar['Titulo']; ?></p>
              <!--<div class="content2">
              <div class="letras">
              <p><?php echo $mostrar['Titulo']; ?></p>
              </div>
              </div>-->
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</body>

</html>