<?php include '../../php/puntos-turista-bd.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../../estilos/user-externo/men-user-extern.css" rel="stylesheet" type="text/css">
  <link href="../../estilos/user-externo/promociones.css" rel="stylesheet" type="text/css">
  <title>Promociones</title>
</head>

<body>
<?php 
  if(!isset($_SESSION['usuarioExterno'])){
    header('Location:../../PaginaPrincipal/login/login.php');
  }else{
  ?>
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
          if ($nombre = $_SESSION['usuarioExterno']) {
            echo "<p>$nombre</p>";
          }
          ?>
        </div>
        <div class="foto">
          <?php
          $nombre1 = $_SESSION['usuarioExterno'];
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
        $consult = "SELECT * FROM promociones where estado=1";
        $resutados = mysqli_query($ared, $consult);
        while ($mostrar = mysqli_fetch_array($resutados)) {
        ?>
          <div class="card">
            <div class="content1">
              <a href="<?php echo $mostrar['Enlace']?>"><img src="<?php echo $mostrar['Fotografia_referencia'];?>" alt=""></a>
              <p><?php echo $mostrar['Titulo']; ?></p>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <?php 
    } 
    ?>
</body>
</html>