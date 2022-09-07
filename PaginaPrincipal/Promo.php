<?php include ("../php/puntos-turista-bd.php");session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../estilos/EstilosPromo.css">
    <title>Página promoción</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">
   </head>
<body> 
<?php 
           $conexion=mysqli_connect('localhost','root','2002','ared')
           ?>
          <?php
          $sql="SELECT Nombre,descripcion_larga,Fotografia_referencia,Foto,Precio from promociones where id_promocion=1";
          $result=mysqli_query($conexion,$sql);

          while($mostrar=mysqli_fetch_array($result)) {
          ?> 
   <body background=<?php echo $mostrar['Fotografia_referencia']?>></body> 
    <header>
        <div> 
           <img src="../imagenes/360.png.png.png" alt="" width="130" height="130" style="float: left"/> 
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
            <li><a href="../Index.php"><img src="../imagenes/home.png.png" style="width: 22px; height:22px;">Inicio</a></li>
            <li><a href="../PaginaPrincipal/Sitios.php">Sitios</a></li>
            <li><a href="../PaginaPrincipal/Paquetes.php">Paquetes</a></li>
            <li><a href="../PaginaPrincipal/Carrito.php"><img src="../imagenes/LC-PNG.png" style="width: 24px; height: 24px;">Carrito</a></li>
           </ul>
        </nav>
    </header>
   <main> 
       <div class="caja1">
       <h2><?php echo $mostrar['Nombre']?></h2>
          <div class="Parrafo">
            <ul> 
            <p><?php echo $mostrar['descripcion_larga']?></p> 
            </ul>
          </div>
          <ul>
              <li><a class="btn_costo" name=""><h5><?php echo $mostrar['Precio']?></h5></a></li>
            </ul>  
         </div>
         <nav id="btn_comprar">
        <form action="../php/carritoCompras.php" method="post">
         <?php
          //enviamos con el  formulario el nombre, precio y cantidad al carrito
          $consulta = "SELECT * FROM promociones WHERE Id_promocion= 1";
          $respuesta = mysqli_query($ared, $consulta);
          while ($fila = mysqli_fetch_assoc($respuesta)){
          ?>
            <input  style="display: none" type="text" name="nombre" value="<?php echo $fila['Nombre'];?>">
            <input  style="display: none" type="text" name="precio" value="<?php echo $fila['Precio'];?>">
            <input  style="display: none" type="text" name="cantidad" value="1">
            <ul>
              <li><button name="agregar3" type="submit" href=""><h5>Reservar</h5></button></li>
            </ul>
          <?php }?>
          </form>
          </nav>
      <aside>
            <div class="img2"> 
              <img src=<?php echo $mostrar['Foto']?> width="250px" height="360px" alt="" style="border-radius: 20px">
              <?php 
             }
             ?>
       
        </form>
      </aside>   
   </main> 
 <body>
   <footer>
      <h4>Ruta 360 Gigante - todos los derechos reservados ©</h4> 
     <div class="tex">
      <h5>Síguenos</h5> 
     </div> 
      <div class="redes">
         <ul class="sociales">
          <li><a href="https://www.facebook.com/Ruta360gigante/"><img src="../imagenes/LogoFacebook.png.png"width="50px" height="50px"></a></li> 
          <li><a href="https://www.instagram.com/ruta360gigante/"><img src="../imagenes/LogoInstagram.png.png"width="50px" height="50px"></a></li>
          <li><a href="https://api.whatsapp.com/send?phone=573203432927&app=facebook&entry_point=page_cta"><img src="../imagenes/LogoWhatsapp.png.png"width="50px" height="50px"></a></li>
          <li><a href="https://www.youtube.com/channel/UCYC0Syd3ESTtsBigvNC7oyg"><img src="../imagenes/LogoYouTube.png.png"width="50px" height="50px"></a></li>
          <br> 
        </div>
   </footer>
</body> 
</html>

