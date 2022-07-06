<?php include ("../php/puntos-turista-bd.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/EstilosCarrito.css">
</head>
<body>
    <header>
        <div> 
           <img src="/Trabajo Sena/SENA/imagenes/360.png.png.png" alt="" width="130" height="130" style="float: left"/> 
           <h1>Ruta 360 Gigante</h1>
        </div>

        <nav id="menu-h">
          <ul>
            <li><a target="blank" href="/Trabajo Sena/SENA/Index.php"><img src="/Trabajo Sena/SENA/imagenes/home.png.png" style="width: 22px; height:22px;"> Inicio</a></li>
            <li><a target="blank" href="/Trabajo Sena/SENA/PaginaPrincipal/Sitios.php">Sitios</a></li>
            <li><a target="blank" href="/Trabajo Sena/SENA/PaginaPrincipal/Paquetes.php">Paquetes</a></li>
            <li><a target="blank" href="/Trabajo Sena/SENA/PaginaPrincipal/Carrito.php"><img src="/Trabajo Sena/SENA/imagenes/LC-PNG.png" style="width: 24px; height: 24px;">Carrito</a></li>
           </ul>
        </nav>
    </header>

    <main>
       <div class="Carrito"> 
        <img src="/Trabajo Sena/SENA/imagenes/Carrito2.png.png" alt="Carrito">
        </div>
        <h1>Carrito</h1> 
        <div class="Caja">
        <form class="eliminarlugar" action="/Trabajo Sena/SENA/php/eliminarlugar.php" method="post">
            <!-- mostrar datos de la BD -->
            <?php 
                    $consult ="SELECT*FROM turista_lugares_paquetes;"; 
                    $resutados = mysqli_query($ared, $consult);

                    while ($mostrar = mysqli_fetch_array($resutados)) {?>
           <div class="subcaja">
                   <li><p><?php echo $mostrar['Nombre'];?></p><button><a onclick="return confirm('estas seguro de eliminar este dato?')" href="/php/eliminarlugar.php?id_lugar=<?php echo $mostrar ['id_lugar'];?>">x Quitar</a></button></li>
                </div> 
                <h5>Mano del Gigante</h5> 
                <h3>+</h3> 
               </div>
               <?php } ?>
                          
               <?php 
                    $consult ="SELECT*FROM turista_lugares_paquetes;"; 
                    $resutados = mysqli_query($ared, $consult);

                    while ($mostrar = mysqli_fetch_array($resutados)) {?>
           <div class="subcaja1">
                   <li><p><?php echo $mostrar['Nombre'];?></p><button><a onclick="return confirm('estas seguro de eliminar este dato?')" href="/php/eliminarlugar.php?id_paquete=<?php echo $mostrar ['id_paquete'];?>">x Quitar</a></button></li>
                </div> 
                <h5>Mano del Gigante</h5> 
                <h3>+</h3> 
               </div>
               <?php } ?> 
          
               <?php 
                    $consult ="SELECT*FROM turista_lugares_paquetes;"; 
                    $resutados = mysqli_query($ared, $consult);

                    while ($mostrar = mysqli_fetch_array($resutados)) {?>
           <div class="subcaja2">
                   <li><p><?php echo $mostrar['Nombre'];?></p><button><a onclick="return confirm('estas seguro de eliminar este dato?')" href="/php/eliminarlugar.php?id_promocion=<?php echo $mostrar ['id_promocion'];?>">x Quitar</a></button></li>
                </div> 
                <h5>Mano del Gigante</h5> 
                <h3>+</h3> 
               </div>
               <?php } ?>
           
           <div class="subcaja3">
           <div class="Barra">
            <a href=""><h6>x Quitar</h6></a> 
          </div> 
          <h5>Mano del Gigante</h5>
        </div>
        <h3>+</h3> 
           <div class="subcaja4">
           <div class="Barra">
            <a href=""><h6>x Quitar</h6></a> 
          </div> 
          <h5>Mano del Gigante</h5>
        </div>
          <div class="subcaja5">
           <div class="Barra">
            <a href=""><h6>x Quitar</h6></a> 
          </div> 
          <h5>Mano del Gigante</h5> 
        </div>  
        <h4>+</h4>
    </div>
    
    <div class="Total">
        <h5>Total: 800.000</h5> 
         </form>
      </div>
    
      <nav id="Comprar"> 
        <ul>
          <li><a href="/Trabajo Sena/SENA/PaginaPrincipal/Pago.php"> Comprar </a></li>
        </ul>
      </nav>
    </main>

    <footer>
        <h4>Ruta 360 Gigante - todos los derechos reservados ©</h4> 
        <h5>Síguenos</h5> 
    
        <div class="redes">
          <ul class="sociales">
           <li><a href="https://www.facebook.com/Ruta360gigante/"><img src="/Trabajo Sena/SENA/imagenes/LogoFacebook.png.png"width="50px" height="50px"></a></li> 
           <li><a href="https://www.instagram.com/ruta360gigante/"><img src="/Trabajo Sena/SENA/imagenes/LogoInstagram.png.png"width="50px" height="50px"></a></li>
           <li><a href="https://api.whatsapp.com/send?phone=573203432927&app=facebook&entry_point=page_cta"><img src="/Trabajo Sena/SENA/imagenes/LogoWhatsapp.png.png"width="50px" height="50px"></a></li>
           <li><a href="https://www.youtube.com/channel/UCYC0Syd3ESTtsBigvNC7oyg"><img src="/Trabajo Sena/SENA/imagenes/LogoYouTube.png.png"width="50px" height="50px"></a></li>
           <br> 
         </div>
     </footer>

</body>
</html>