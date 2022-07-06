<?php include ("../php/puntos-turista-bd.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página promoción</title>
    <link rel="stylesheet" href="/Trabajo Sena/SENA/Estilos/EstilosPromo.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">
   </head>
<body>  
    <header>
        <div> 
           <img src="/Trabajo Sena/SENA/imagenes/360.png.png.png" alt="" width="130" height="130" style="float: left"/> 
           <h1>Ruta 360 Gigante</h1>
        </div>
          
        <nav id="menu-h">
          <ul>
            <li><a target="blank" href="/Trabajo Sena/SENA/Index.php"><img src="/Trabajo Sena/SENA/imagenes/home.png.png" style="width: 22px; height:22px;">Inicio</a></li>
            <li><a target="blank" href="/Trabajo Sena/SENA/PaginaPrincipal/Sitios.php">Sitios</a></li>
            <li><a target="blank" href="/Trabajo Sena/SENA/PaginaPrincipal/Paquetes.php">Paquetes</a></li>
            <li><a target="blank" href="/Trabajo Sena/SENA/PaginaPrincipal/Carrito.php"><img src="/Trabajo Sena/SENA/imagenes/LC-PNG.png" style="width: 24px; height: 24px;">Carrito</a></li>
           </ul>
        </nav>
    </header>
   <main> 
       <div class="caja1">
       <form class="promo" action="/Trabajo Sena/SENA/php/promo.php" method="post">
          <h2>¡Promoción del mes!</h2>
          <div class="Parrafo">
            <ul> 
            <p>Conoce el Municipio de Gigante con
               30% de descuento en todas nuestras
               rutas. Verás paisajes únicos y majestuosos
               de la mano de expertos en
               guianza turística. ¿Qué estás esperando?
               Reserva la ruta de tus sueños
               ¡AHORA!</p> 
            </ul>
          </div>
         </div>
      <aside>
            <div class="img2">
              <img src="/Trabajo Sena/SENA/imagenes/Imagen1.png" width="250px" height="360px" alt="" style="border-radius: 20px">
            </div>

         <div class="Botton">
            <a href="/Trabajo Sena/SENA/PaginaPrincipal/Carrito.php"><h5>Reservar</h5></a> 
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
          <li><a href="https://www.facebook.com/Ruta360gigante/"><img src="/Trabajo Sena/SENA/imagenes/LogoFacebook.png.png"width="50px" height="50px"></a></li> 
          <li><a href="https://www.instagram.com/ruta360gigante/"><img src="/Trabajo Sena/SENA/imagenes/LogoInstagram.png.png"width="50px" height="50px"></a></li>
          <li><a href="https://api.whatsapp.com/send?phone=573203432927&app=facebook&entry_point=page_cta"><img src="/Trabajo Sena/SENA/imagenes/LogoWhatsapp.png.png"width="50px" height="50px"></a></li>
          <li><a href="https://www.youtube.com/channel/UCYC0Syd3ESTtsBigvNC7oyg"><img src="/Trabajo Sena/SENA/imagenes/LogoYouTube.png.png"width="50px" height="50px"></a></li>
          <br> 
        </div>
   </footer>
</body> 
</html>

