<?php include ("../php/puntos-turista-bd.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página promoción</title>
    <link rel="stylesheet" href="../estilos/EstilosPromo.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">
   </head>
<body>  
<?php 
           $conexion=mysqli_connect('localhost','root','2002','ared')
           ?>
          <?php
          $sql="SELECT descripcion_corta,descripcion_larga,Fotografia_referencia,Foto from promociones where id_promocion=1";
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
       <h2><?php echo $mostrar['descripcion_corta']?></h2>
          <div class="Parrafo">
            <ul> 
            <p><?php echo $mostrar['descripcion_larga']?></p> 
            </ul>
          </div>
               
         </div>
      <aside>
            <div class="img2"> 
              <img <?php echo $mostrar['Foto']?> width="250px" height="360px" alt="" style="border-radius: 20px">
              <?php 
             }
             ?>

         <div class="Botton">
            <a href="../PaginaPrincipal/Carrito.php"><h5>Reservar</h5></a> 
           </div>
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

