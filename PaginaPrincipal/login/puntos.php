<?php 
include '../../php/puntos-turista-bd.php'; 
session_start();
$nombre1 = $_SESSION['usuarioExterno'];
$consulta = "SELECT *FROM registro_turista where Nombre='$nombre1'";
$cons = mysqli_query($ared, $consulta);
while ($rows = mysqli_fetch_array($cons)) {
    //se envia los datos del id
    $_SESSION['turista_id'] = $rows['id_turista'];
    $puntos=$rows['Puntos_acumulados'];
}
//'../login/editar-perfil.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../../estilos/user-externo/men-user-extern.css" rel="stylesheet" type="text/css">
  <link href="../../estilos/user-externo/puntos.css" rel="stylesheet" type="text/css">
  <title>Puntos</title>
</head>
<body class="body">
  <?php 
  if(!isset($_SESSION['usuarioExterno'])){
    header('Location:../../PaginaPrincipal/login/login.php');
  }else{
  ?>
  <div class="menu">
    <?php
    include '../../php/include/men-user-extern.php';
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
          //traemos la variable $_SESSION['turista_id'] de editar-perfil.php
          $consult = "SELECT * FROM generarpuntos WHERE Id_turista='".$_SESSION['turista_id']."'";
          $resutados = mysqli_query($ared, $consult);
          while ($mostrar = mysqli_fetch_array($resutados)){?>
            <li>
               <p onclick="dato(<?php $var = $mostrar['Cod_descuento'];echo $var?>)"><?php echo $mostrar['puntos_manualmente']; ?></p><a href="/php/--.php?id=<?php echo $mostrar['Cod_descuento']; ?>">usar</a>
            </li>
          <?php } ?>
        </ol>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
          function dato(id) {
            var url ='/php/id.php';
            $.ajax({
              type:'POST',
              url:url,
              data: 'id=' + id,
              success: function(response) {
                console.log(response);
                document.location.reload();
              }
            });
          }
        </script>
      </div>
    </div>
    <br>
    <div class="caja2">
      <div class="parrafo">
        <p>Usar puntos acomulados (<?php echo $puntos.' puntos' ?>)</p>
      </div>
    </div>
  </div>
  <div class="contenedor2">
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
        $result = $ared->query("SELECT * FROM registro_turista WHERE Nombre = '$nombre1'");
        while ($mostrar = mysqli_fetch_array($result)) {
        ?>
          <img src="<?php echo $mostrar['Fotografia']; ?>" alt="">
        <?php } ?>
      </div>
    </div>
    <div class="codigo">
      <div class="tex">
        <p class="p">Codigo del punto</p>
        <?php
            if(!isset($_SESSION['j'])){
              $_SESSION['j']=0;
            }
            $consult = "SELECT * FROM generarpuntos WHERE Cod_descuento='".$_SESSION['j']."'";
            $resutados = mysqli_query($ared, $consult);
            if ($mostrar = mysqli_fetch_array($resutados)) { 
        ?>
          <p class="p2">
            <?php 
              print_r($_SESSION['j']);
            ?>
          </p>
        <?php } ?>
        <p class="p3">Puedes uzar este codigo de descuento en cualquiera de nuestros sitios o paquetes.<br> <strong>No es reutilizable.</strong></p>
      </div>
    </div>
    <br>
    <div class="sitio">
      <div class="formulario">
        <?php
        $result = mysqli_query($ared, "SELECT Cod_lugar_turistico,Nombre FROM lugares_turisticos");
        ?>
        <form action="/php/confirmar.php" class="form" method="POST">
          <p>Seleccionar sitio</p>
          <select name="sitio" id="selectSitio">
            <?php
            while ($fila = $result->fetch_assoc()) :
              $id = $fila['Cod_lugar_turistico'];
              $nombre = $fila['Nombre'];
              echo "<option value=$id>$nombre</option>";
            endwhile;
            ?>
          </select>
          <p>Seleccionar paquete</p>
          <?php
          $result = mysqli_query($ared, "SELECT Cod_paquete,Nombre FROM paquetes_turisticos");
          ?>
          <select name="paquetes" id="">
            <?php
            while ($fila = $result->fetch_assoc()) :
              $id = $fila['Cod_paquete'];
              $nombre = $fila['Nombre'];
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
<?php 
    }
    ?>
</body>

</html>