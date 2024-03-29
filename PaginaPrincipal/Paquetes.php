<?php include ("../php/puntos-turista-bd.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página Paquetes</title>
    <link rel="stylesheet" href="../estilos/EstilosPaquetes.css">
    <link meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>
</head>
<body>
<body background="../imagenes/FondoCielo.png.jpg"></body>
    <header>
    <div class="content">
      <div class="inicio_imagen">
        <img src="../imagenes/360.png.png.png" alt="" width="130" height="130" />
        <h1>Ruta 360 Gigante</h1>
      </div>

      <div class="img-menu" id="img-menu">
        <div id="click"><img src="../imagenes/menu.svg" alt=""></div>
      </div>
    </div>

    <nav id="menu-h">
      <ul class="sub-a" id="sub-b">
        <li><a href="../Index.php"><img src="../imagenes/home.png.png">Inicio</a></li>
        <li><a href="../PaginaPrincipal/Sitios.php">Sitios</a></li>
        <li><a href="../PaginaPrincipal/Paquetes.php">Paquetes</a></li>
        <li><a href="../PaginaPrincipal/Carrito.php"><img src="../imagenes/LC-PNG.png">Carrito</a></li>
      </ul>
    </nav>
    </header>

      <main>    
         <?php 
          //$conexion=mysqli_connect('localhost','root','2002','ared')
           ?>
          <?php
          $sql="SELECT Nombre,Rutas,Foto_fondo,Enlace from paquetes_turisticos where Cod_paquete=10";
          $result=mysqli_query($ared,$sql);

          while($mostrar=mysqli_fetch_array($result)) {
          ?> 

          <?php 
            $consult= "SELECT Foto_fondo,Nombre,Rutas,Enlace FROM paquetes_turisticos";
            $resultados= mysqli_query($ared, $consult);

             while ($mostrar = mysqli_fetch_array($resultados)) {?>
                <div class="caja"> 
                    <div class="img">
                      <div class="img2">
                        <a href="<?php echo $mostrar['Enlace']?>"><img src=<?php echo $mostrar['Foto_fondo']?>></a>
                       </div>
                    </div> 
                     <div class="subcaja">
                        <div class="texto">
                         <h2><?php echo $mostrar['Nombre']?></h2> 
                         <p><?php echo nl2br($mostrar['Rutas']);?></p> 
                        </div>
                     </div>
                    </div>
                   <?php }?>
                    
                        <?php 
                        }
                        ?>         
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
 <<script src="../script/menu.js"></script>
 </body> 
</html>