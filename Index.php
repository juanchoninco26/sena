<?php include("./php/puntos-turista-bd.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Página Principal</title>
  <link rel="stylesheet" href="./estilos/Estilos.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link meta name="viewport" content="width=device-width, initial-scale=1.0" &amp;gt;>

  <!--fontawesome.com-->
</head>

<body>
  <header>

    <div class="content">
      <div class="inicio_imagen">
        <img src="./imagenes/360.png.png.png" alt="" width="130" height="130" />
        <h1>Ruta 360 Gigante</h1>
      </div>

      <div class="img-menu" id="img-menu">
        <div id="click"><img src="./imagenes/menu.svg" alt=""></div>
      </div>
    </div>

    <nav id="menu-h">
      <ul class="sub-a" id="sub-b">
        <li><a href="Index.php"><img src="./imagenes/home.png.png">Inicio</a></li>
        <li><a href="./PaginaPrincipal/Sitios.php">Sitios</a></li>
        <li><a href="./PaginaPrincipal/Paquetes.php">Paquetes</a></li>
        <li><a href="./PaginaPrincipal/Carrito.php"><img src="./imagenes/LC-PNG.png"> Carrito</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <div class="Imagen">
      <div class="imagen2">
        <img src="./imagenes/Imagen_principal.png.png" alt="">
      </div>
    </div>

    <aside>
      <?php

      $sql = "SELECT Titulo,porcentaje from promociones where id_promocion=1";
      $result = mysqli_query($ared, $sql);

      while ($mostrar = mysqli_fetch_array($result)) {
      ?>

        <div class="text">
          <h2><?php echo nl2br($mostrar['porcentaje']) ?>%</h2>
          <h4>dto</h4>
        </div>
        <p><?php echo nl2br($mostrar['Titulo']) ?></p>
      <?php
      }
      ?>

      <div class="Promo">
        <div class="H">
          <li><a href="./PaginaPrincipal/Promo.php">Conocer más</a></li>
        </div>
        <ul class="asesor-c">
          <h6>Contacto <br> Asesor <br> Comercial</h6>
          <nav id="menu-h2"></nav>
          <div class="Logo">
            <div class="Logo2">
              <li><a href="https://api.whatsapp.com/send?phone=573203432927&app=facebook&entry_point=page_cta"><img src="./imagenes/LogoAsesor.png.png"></a></li>
            </div>
          </div>
        </ul>
      </div>
    </aside>
  </main>

  <footer>
    <div class="redes">
      <ul class="sociales">
        <li><a href="https://www.facebook.com/Ruta360gigante/"><img src="./imagenes/LogoFacebook.png.png" width="50px" height="50px"></a></li>
        <li><a href="https://www.instagram.com/ruta360gigante/"><img src="./imagenes/LogoInstagram.png.png" width="50px" height="50px"></a></li>
        <li><a href="https://api.whatsapp.com/send?phone=573203432927&app=facebook&entry_point=page_cta"><img src="./imagenes/LogoWhatsapp.png.png" width="50px" height="50px"></a></li>
        <li><a href="https://www.youtube.com/channel/UCYC0Syd3ESTtsBigvNC7oyg"><img src="./imagenes/LogoYouTube.png.png" width="50px" height="50px"></a></li>
        <br>
    </div>

    <div class="Barra">
      <h3> Siguenos en nuestras <br> Redes Sociales </h3>
    </div>

    <button class="btn-abrir-popup" id="btn-abrir-popup"> Suscríbete a Nuestro Newsletter para recibir nuestras novedades.</button>
    <div class="overlay" id="overlay">
      <form class="guardar-correo" action="./php/correo.php" method="post">
        <div class="popup" id="popup">
          <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
          <h2>Newsletter</h2>
          <p>Registra tu correo electrónico para recibir todas las
            promociones y sitios que tenemos para que visites.
            No te pierdas la oportunidad de vivir una experiencia
            cero estrés.</p>
          <div>
            <div class="contenedor-inputs">
              <input autocomplete="off" type="email" class="campo" placeholder="Introduce tu correo electrónico" name="correo">
              <input type="submit" value="Suscribir" value="Mensaje" class="btn-sub" name="boton" onclick="alert('Tu correo fue suscrito exitosamente')">
            </div>
          </div>
        </div>
      </form>
    </div>

  </footer>
  
  <script src="./script/menu.js"></script>
  <script src="./script/popup.js"></script>

</body>

</html>