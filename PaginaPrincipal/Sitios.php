<?php include ("../php/puntos-turista-bd.php"); session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página Sitios</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/EstilosSitios.css">
</head>
<body>
<body background="../imagenes/Recurso2.png.png"></body>
    <header>
        <div> 
           <img src="../imagenes/360.png.png.png" alt="" width="130" height="130" style="float: left"/> 
           <h1>Ruta 360 Gigante</h1>
        </div>
 
        <nav id="menu-h">
          <ul>
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
            <li><a href="../Index.php"><img src="../imagenes/home.png.png" style="width: 22px; height:22px;"> Inicio</a></li>
            <li><a href="../PaginaPrincipal/Sitios.php">Sitios</a></li>
            <li><a href="../PaginaPrincipal/Paquetes.php">Paquetes</a></li>
            <li><a href="../PaginaPrincipal/Carrito.php"><img src="../imagenes/LC-PNG.png" style="width: 24px; height: 24px;"> <?php echo $totalCantidad ?> Carrito</a></li>
           </ul>
        </nav>
    </header>

          <main>  
          <?php 
          //$ared=mysqli_connect('localhost','root','2002','ared')
           ?>
          <?php
          $sql="SELECT Nombre,Foto1,Foto2,Foto3 from lugares_turisticos where Cod_lugar_turistico=1";
          $result=mysqli_query($ared,$sql);

          while($mostrar=mysqli_fetch_array($result)) {
          ?> 
            <?php 
            $consult= "SELECT Foto1,Foto2,Foto3,Nombre FROM lugares_turisticos";
            $resultados= mysqli_query($ared, $consult);

             while ($mostrar = mysqli_fetch_array($resultados)) {?>
              <div id="Cajas">  
              <div class="caja"> 
                <div class="img">
                  <div class="img2">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <a href="../PaginaPrincipal/Sitios2.php"><img src=<?php echo $mostrar['Foto1']?> class="d-block w-100" alt="baneer1"></a>
                        </div>
                        <div class="carousel-item">
                          <a href="../PaginaPrincipal/Sitios2.php"><img src=<?php echo $mostrar['Foto2']?> class="d-block w-100" alt="banner2"></a>
                        </div>
                        <div class="carousel-item">
                          <a href="../PaginaPrincipal/Sitios2.php"><img src=<?php echo $mostrar['Foto3']?> class="d-block w-100" alt="banner3"></a>
                        </div>
                      </div>
                    </div>
                   </div>
                </div> 
                 <div class="subcaja">
                  <div class="texto">
                    <h2><?php echo $mostrar['Nombre']?></h2>
                    <h3>Mirador-Fototour</h3>  
                    </div>
                 </div>
                </div>
                <?php }?>
               <?php 
                 }
                ?> 
               
              <!--<div class="caja"> 
                <div class="img">
                  <div class="img2">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <a href="../PaginaPrincipal/Sitios3.php"><img src="../imagenes/MiradorCacica.png" class="d-block w-100" alt="baneer1"></a>
                        </div>
                        <div class="carousel-item">
                          <a href="../PaginaPrincipal/Sitios3.php"><img src="../imagenes/MiradorCacica2.png" class="d-block w-100" alt="banner2"></a>
                        </div>
                        <div class="carousel-item">
                          <a href="../PaginaPrincipal/Sitios3.php"><img src="../imagenes/MiradorCacica3.png" class="d-block w-100" alt="banner3"></a>
                        </div>
                      </div>
                    </div>
                   </div>
                </div> 
                 <div class="subcaja">
                  <div class="texto">
                    <h2>La Cacica</h2>
                    <h3>Mirador-Fototour</h3>  
                    </div>
                 </div>
                </div>

                <div class="caja"> 
                  <div class="img">
                    <div class="img2">
                      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <a href="../PaginaPrincipal/Sitios.php"><img src="../imagenes/Balcon.png" class="d-block w-100" alt="baneer1"></a>
                          </div>
                          <div class="carousel-item">
                            <a href="../PaginaPrincipal/Sitios2.php"><img src="../imagenes/Balcon2.png" class="d-block w-100" alt="banner2"></a>
                          </div>
                          <div class="carousel-item">
                            <a href="../PaginaPrincipal/Sitios2.php"><img src="../imagenes/Balcon3.png" class="d-block w-100" alt="banner3"></a>
                          </div>
                        </div>
                      </div>
                     </div>
                  </div> 
                   <div class="subcaja">
                    <div class="texto">
                      <h2>Mirador-El Balcón</h2>
                      <h3>Fototour</h3>  
                      </div>
                   </div>
                  </div>

                  <div class="caja"> 
                    <div class="img">
                      <div class="img2">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <a href="../PaginaPrincipal/Sitios2.php"><img src="../imagenes/Desierto_de_La_Tatacoa.jpg" class="d-block w-100" alt="baneer1"></a>
                            </div>
                            <div class="carousel-item">
                              <a href="../PaginaPrincipal/Sitios2.php"><img src="../imagenes/desierto-de-la-tatacoa-2.jpg" class="d-block w-100" alt="banner2"></a>
                            </div>
                            <div class="carousel-item">
                              <a href="../PaginaPrincipal/Sitios2.php"><img src="../imagenes/desierto-de-la-tatacoa-3.jpg" class="d-block w-100" alt="banner3"></a>
                            </div>
                          </div>
                        </div>
                       </div>
                    </div> 
                     <div class="subcaja">
                      <div class="texto">
                        <h2>Desierto de la Tatacoa</h2>
                        <h3>Fototour</h3>  
                        </div>
                     </div>
                    </div>
                  </div>

                  <div class="caja"> 
                    <div class="img">
                      <div class="img2">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <a href="../PaginaPrincipal/Sitios.php"><img src="../imagenes/Balcon.png" class="d-block w-100" alt="baneer1"></a>
                            </div>
                            <div class="carousel-item">
                              <a href="../PaginaPrincipal/Sitios2.php"><img src="../imagenes/Balcon2.png" class="d-block w-100" alt="banner2"></a>
                            </div>
                            <div class="carousel-item">
                              <a href="../PaginaPrincipal/Sitios2.php"><img src="../imagenes/Balcon3.png" class="d-block w-100" alt="banner3"></a>
                            </div>
                          </div>
                        </div>
                       </div>
                    </div> 
                     <div class="subcaja">
                      <div class="texto">
                        <h2>Mirador-El Balcón</h2>
                        <h3>Fototour</h3>  
                        </div>
                     </div>
                    </div>-->
                  
            </main> 

   <footer>
    <h4>Ruta 360 Gigante - todos los derechos reservados ©</h4> 
    <h5>Síguenos</h5> 

    <div class="redes">
      <ul class="sociales">
       <li><a href="https://www.facebook.com/Ruta360gigante/"><img src="../imagenes/LogoFacebook.png.png"width="50px" height="50px"></a></li> 
       <li><a href="https://www.instagram.com/ruta360gigante/"><img src="../imagenes/LogoInstagram.png.png"width="50px" height="50px"></a></li>
       <li><a href="https://api.whatsapp.com/send?phone=573203432927&app=facebook&entry_point=page_cta"><img src="../imagenes/LogoWhatsapp.png.png"width="50px" height="50px"></a></li>
       <li><a href="https://www.youtube.com/channel/UCYC0Syd3ESTtsBigvNC7oyg"><img src="../imagenes/LogoYouTube.png.png"width="50px" height="50px"></a></li>
       <br> 
     </div>
   </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body> 
</html>

