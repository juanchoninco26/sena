<?php include("../php/puntos-turista-bd.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Paquetes2</title>
  <link rel="stylesheet" href="../Estilos/EstilosPaquetes2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link meta name="viewport" content="width=device-width, initial-scale=1.0" &amp;gt;>
</head>

<?php
$sql = "SELECT Nombre,Foto_fondo,Foto1,Foto2,Foto3,Precio,Punto_paquete,Descripcion,Itinerario,Incluye,Recomendaciones from paquetes_turisticos where Cod_paquete=10";
$result = mysqli_query($ared, $sql);

while ($mostrar = mysqli_fetch_array($result)) {
?>

  <body background=<?php echo $mostrar['Foto_fondo']; ?> >

    <header>
      <div>
        <img src="../imagenes/360.png.png.png" alt="" width="130" height="130" style="float: left" />
        <h1>Ruta 360 Gigante</h1>
      </div>

      <nav id="menu-h">
        <?php
        // contamos los productos agregados
        if (isset($_SESSION['carrito'])) {
          $carrito_compras = $_SESSION['carrito'];
          for ($i = 0; $i <= count($carrito_compras) - 1; $i++) {
            if (isset($carrito_compras[$i])) {
              if ($carrito_compras[$i] != NULL) {
                if (!isset($carrito_compras['cantidad'])) {
                  $carrito_compras['cantidad'] = '0';
                } else {
                  $carrito_compras['cantidad'] = $carrito_compras['cantidad'];
                }
                $total_cantidad = $carrito_compras['cantidad'];
                $total_cantidad++;
                if (!isset($totalCantidad)) {
                  $totalCantidad = '0';
                } else {
                  $totalCantidad = $totalCantidad;
                }
                $totalCantidad += $total_cantidad;
              }
            }
          }
        }
        if (!isset($totalCantidad)) {
          $totalCantidad = '';
        } else {
          $totalCantidad = $totalCantidad;
        }
        ?>
        <ul>
          <li><a href="../Index.php"><img src="../imagenes/home.png.png" style="width: 22px; height:22px;"> Inicio</a></li>
          <li><a href="../PaginaPrincipal/Sitios.php">Sitios</a></li>
          <li><a href="../PaginaPrincipal/Paquetes.php">Paquetes</a></li>
          <li><a href="../PaginaPrincipal/Carrito.php"><img src="../imagenes/LC-PNG.png" style="width: 22px; height: 22px;">Carrito</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <div class="caja">
        <div class="img">
          <div class="img2">
            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src=<?php echo $mostrar['Foto1'] ?> width="50%" height="300px" class="d-block w-100" alt="banner1">
                </div>
                <div class="carousel-item">
                  <img src=<?php echo $mostrar['Foto2'] ?> width="50%" height="300px" class="d-block w-100" alt="banner2">
                </div>
                <div class="carousel-item">
                  <img src=<?php echo $mostrar['Foto3'] ?> width="50%" height="300px" class="d-block w-100" alt="banner3">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <div class="subcaja">
          <div class="texto1">
            <h3><?php echo nl2br($mostrar['Nombre']); ?></h3>
          </div>
        </div>
      </div>

      <aside>
        <div class="texto">
          <p><?php echo $mostrar['Descripcion'] ?></p>
          <h2>Itinerario</h2>
          <p><?php echo $mostrar['Itinerario'] ?></p>
          <h2>Incluye</h2>
          <p><?php echo $mostrar['Incluye'] ?></p>
          <h2>Recomendaciones</h2>
          <p><?php echo $mostrar['Recomendaciones'] ?></p>
          <h4>Por cada compra,acumulas puntos de descuento para que lo uses en tu próxima compra</h4>
        </div>

        <nav id="Comprar">
          <form action="../php/carritoCompras.php" method="post">
            <?php
            //enviamos con el  formulario el nombre, precio y cantidad al carrito
            $consulta = "SELECT * FROM paquetes_turisticos WHERE Cod_paquete= 10";
            $respuesta = mysqli_query($ared, $consulta);
            while ($fila = mysqli_fetch_assoc($respuesta)) {
            ?>
              <input style="display: none" type="text" name="nombre" value="<?php echo $fila['Nombre']; ?>">
              <input style="display: none" type="text" name="precio" value="<?php echo $fila['Precio']; ?>">
              <input style="display: none" type="text" name="cantidad" value="1">
              <ul>
                <li><button name="agregar3" type="submit" href="">Comprar</button></li>
              </ul>
            <?php } ?>
          </form>
        </nav>

        <div class="Valor">
          <h5>Valor:<?php echo  $mostrar['Precio']; ?></h5>
        </div>

        <div class="Punto">
          <h5>Puntos:<?php echo  $mostrar['Punto_paquete']; ?></h5>
        </div>
      </aside>

    </main>

    <footer>
      <h4>Ruta 360 Gigante - todos los derechos reservados ©</h4>
      

      <div class="redes">
      <h5>Síguenos:</h5>
        <ul class="sociales">
          <li><a href="https://www.facebook.com/Ruta360gigante/"><img src="../imagenes/LogoFacebook.png.png" width="50px" height="50px"></a></li>
          <li><a href="https://www.instagram.com/ruta360gigante/"><img src="../imagenes/LogoInstagram.png.png" width="50px" height="50px"></a></li>
          <li><a href="https://api.whatsapp.com/send?phone=573203432927&app=facebook&entry_point=page_cta"><img src="../imagenes/LogoWhatsapp.png.png" width="50px" height="50px"></a></li>
          <li><a href="https://www.youtube.com/channel/UCYC0Syd3ESTtsBigvNC7oyg"><img src="../imagenes/LogoYouTube.png.png" width="50px" height="50px"></a></li>
          <br>
        </ul>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
<?php
}
?>
</html>