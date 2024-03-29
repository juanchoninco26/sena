<?php
include("../php/puntos-turista-bd.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Página Sitios5</title>
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="../estilos/EstilosSitios2.css">
  <link meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>
</head>
<body> 
 <?php
 $sql="SELECT Nombre,descripcion_corta,descripcion_larga,precio,ubicacion,punto_lugar,Foto_fondo,foto1,foto2,foto3,Punto_lugar from lugares_turisticos where Cod_lugar_turistico=4";
 $result=mysqli_query($ared,$sql);

 while($mostrar=mysqli_fetch_array($result)) {
 ?>

   <body background=<?php echo $mostrar['Foto_fondo']?>></body>
      <?php
        // contamos los productos agregados
         if (isset($_SESSION['carrito'])) {
          $carrito_compras=$_SESSION['carrito'];
          for ($i=0;$i<=count($carrito_compras)-1;$i++) {
            if (isset($carrito_compras[$i])){
              if ($carrito_compras[$i]!=NULL) {
                if(!isset($carrito_compras['cantidad'])){$carrito_compras['cantidad']='0';}else{$carrito_compras['cantidad']=$carrito_compras['cantidad'];}
              $total_cantidad=$carrito_compras['cantidad'];
              $total_cantidad++;
              if(!isset($totalCantidad)){
                $totalCantidad='0';
              }else{
                $totalCantidad=$totalCantidad;
              }
              $totalCantidad+=$total_cantidad;
              }
           }
         }
       }
        if (!isset($totalCantidad)) {
          $totalCantidad='';
        }else{
            $totalCantidad=$totalCantidad;
        }
        ?>
    <header>
        <div> 
           <img src="../imagenes/360.png.png.png" alt="" width="130" height="130" style="float: left"/> 
           <h1>Ruta 360 Gigante</h1>
        </div>

        <nav id="menu-h">
          <ul>
            <li><a href="../Index.php"><img src="../imagenes/home.png.png" style="width: 22px; height:22px;"> Inicio</a></li>
            <li><a href="../PaginaPrincipal/Sitios.php">Sitios</a></li>
            <li><a href="../PaginaPrincipal/Paquetes.php">Paquetes</a></li>
            <li><a href="../PaginaPrincipal/Carrito.php"><img src="../imagenes/LC-PNG.png" style="width: 22px; height: 22px;">Carrito</a></li>
           </ul>
        </nav>
    </header>
  <main>
  <h2><?php echo $mostrar['Nombre']?></h2>

        <div class="texto">
          <div class="caja"> 
          <div class="subtexto"> 
          <p><?php echo nl2br($mostrar['descripcion_corta']);?></p> 
          </div>
           
          <div class="texto2">
           <div class="subtexto2"> 
           <p><?php echo nl2br($mostrar['descripcion_larga']);?></p> 
          </div>
        </div>
         </div>
          </div>
          
          <div class="Botones">
            
            <div class="Punto">
              <h5>Puntos:<?php echo  $mostrar['Punto_lugar'];?></h5> 
            </div>

      <nav id="Reserva">
      <form action="../php/carritoCompras.php" method="post">
        <ul>
          <li><button name="agregar3" type="submit" href=""><h5>Reservar Ahora</h5></button></li>
        </ul>
      </nav>

      <nav id="Carrito">
          <?php
          //enviamos con el  formulario el nombre, precio y cantidad al carrito
          $consulta = "SELECT * FROM lugares_turisticos WHERE Cod_lugar_turistico= 4";
          $respuesta = mysqli_query($ared, $consulta);
          while ($fila = mysqli_fetch_assoc($respuesta)){
          ?>
            <input  style="display: none" type="text" name="nombre" value="<?php echo $fila['Nombre'];?>">
            <input  style="display: none" type="text" name="precio" value="<?php echo $fila['Precio'];?>">
            <input  style="display: none" type="text" name="cantidad" value="1">
            <ul>
              <li><button name="agregar1" type="submit" href=""><img src="../imagenes/LC-PNG.png" style="width: 24px; height: 24px;"> Agregar al carrito</button></li>
            </ul>
          <?php }?>
          </form>
      </nav>

           <div class="Valor">
             <h5>Valor:<?php echo $mostrar['precio']?></h5> 
           </div>
      </div>

    <aside>
      <nav id="boton">
        <ul>
          <li><a href="../PaginaPrincipal/Sitios.php">
              <<< Volver </a>
          </li>
        </ul>
      </nav>

      <div class="Ubicación">
        <div class="Caja">
          <ul>
            <a href="<?php echo $mostrar['ubicacion']?>"><img src="../imagenes/Ubicación.png"></a>
          </ul>
        </div>
      </div>

      <div class="Fotos">
        <div class="Caja2">
          <ul>
            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src=<?php echo $mostrar['foto1']?> width="50%" height="300px" class="d-block w-100" alt="banner1">
                </div>
                <div class="carousel-item">
                  <img src=<?php echo $mostrar['foto2']?> width="50%" height="300px" class="d-block w-100" alt="banner2">
                </div>
                <div class="carousel-item">
                  <img src=<?php echo $mostrar['foto3']?> width="50%" height="300px" class="d-block w-100" alt="banner3">
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
          </ul>
        </div>
      </div>

      <div class="contenedor">
        <div class="boton">
          <button id="btn-abrir-popup" class="btn-abrir-popup">ver</button>
        </div>
        <div class="overlay" id="overlay">
          <div class="popup" id="popup">
            <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
            <div id="Cajas">
              <div class="caja">
                <div class="img">
                  <div class="img2">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <a href="../PaginaPrincipal/Sitios2.html"><img src=<?php echo $mostrar['foto1']?> class="d-block w-100" alt="baneer1"></a>
                        </div>
                        <div class="carousel-item">
                          <a href="../PaginaPrincipal/Sitios2.html"><img src=<?php echo $mostrar['foto2']?> class="d-block w-100" alt="banner2"></a>
                        </div>
                        <div class="carousel-item">
                          <a href="../PaginaPrincipal/Sitios2.html"><img src=<?php echo $mostrar['foto3']?> class="d-block w-100" alt="banner3"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <nav id="Video">
        <ul>
          <li><a href="https://www.youtube.com/results?search_query=mano+del+gigante+huila">Ver Video</a></li>
        </ul>
      </nav>
      
    </aside>
  </main>



  <footer>
    <h4>Ruta 360 Gigante - todos los derechos reservados ©</h4>
    <div class="Promo">
      <ul>
        <h6>Contacto <br> Asesor <br> Comercial</h6>
        <nav id="menu-h2"></nav>
        <div class="Logo">
          <div class="Logo2">
            <li><a href="https://api.whatsapp.com/send?phone=573203432927&app=facebook&entry_point=page_cta"><img src="../imagenes/LogoAsesor.png.png" width="60px" height="60px"></a></li>
          </div>
        </div>
      </ul>
    </div>
    <h5>Síguenos</h5>

    <div class="redes">
      <ul class="sociales">
        <li><a href="https://www.facebook.com/Ruta360gigante/"><img src="../imagenes/LogoFacebook.png.png" width="50px" height="50px"></a></li>
        <li><a href="https://www.instagram.com/ruta360gigante/"><img src="../imagenes/LogoInstagram.png.png" width="50px" height="50px"></a></li>
        <li><a href="https://api.whatsapp.com/send?phone=573203432927&app=facebook&entry_point=page_cta"><img src="../imagenes/LogoWhatsapp.png.png" width="50px" height="50px"></a></li>
        <li><a href="https://www.youtube.com/channel/UCYC0Syd3ESTtsBigvNC7oyg"><img src="../imagenes/LogoYouTube.png.png" width="50px" height="50px"></a></li>
        <br>
      </ul>
    </div>
  </footer>
  <script src="../script/popup.js"></script>
<?php 
    }
    ?>
</body>
</html>