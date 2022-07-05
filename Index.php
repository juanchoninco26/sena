<?php include ("./php/puntos-turista-bd.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página Principal</title>
    <link rel="stylesheet" href="/Trabajo Sena/SENA/estilos/Estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
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
           <li><a target="blank" href="/Trabajo Sena/SENA/PaginaPrincipal/Carrito.php"><img src="/Trabajo Sena/SENA/imagenes/LC-PNG.png" style="width: 24px; height: 24px;">  Carrito</a></li>
          </ul>
       </nav>
   </header>

         <main>
           <div class="Imagen">
             <div class="imagen2"> 
                <img src="/Trabajo Sena/SENA/imagenes/Imagen_principal.png.png" alt="">
              </div>
           </div>  
             
           
           <aside>
            <div class="text">
              <h2>30%</h2>
              <h4>dto</h4>
             </div>
             <p>En nuestras rutas al<br> 
               interior del municipio<br> 
               de Gigante-Huila</p>
              
             <div class="Promo">
               <ul>
                <div class="H"> 
                 <li><a href="/Trabajo Sena/SENA/PaginaPrincipal/Promo.php">Conocer más</a></li>
                </div>
                 <h6>Contacto <br> Asesor <br> Comercial</h6>
                 <nav id="menu-h2"></nav> 
                 <div class="Logo">
                  <div class="Logo2">
                  <li><a href="https://api.whatsapp.com/send?phone=573203432927&app=facebook&entry_point=page_cta"><img src="/Trabajo Sena/SENA/imagenes/LogoAsesor.png.png" width="60px" height="60px"></a></li>
                  </div>
                 </div>
               </ul>
             </div>     
           </aside>
         </main>

         <footer>
             <body>
                  <div class="redes">
                   <ul class="sociales">
                    <li><a href="https://www.facebook.com/Ruta360gigante/"><img src="/Trabajo Sena/SENA/imagenes/LogoFacebook.png.png"width="50px" height="50px"></a></li> 
                    <li><a href="https://www.instagram.com/ruta360gigante/"><img src="/Trabajo Sena/SENA/imagenes/LogoInstagram.png.png"width="50px" height="50px"></a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=573203432927&app=facebook&entry_point=page_cta"><img src="/Trabajo Sena/SENA/imagenes/LogoWhatsapp.png.png"width="50px" height="50px"></a></li> 
                    <li><a href="https://www.youtube.com/channel/UCYC0Syd3ESTtsBigvNC7oyg"><img src="/Trabajo Sena/SENA/imagenes/LogoYouTube.png.png"width="50px" height="50px"></a></li>
                    <br> 
                  </div> 
                    
                  <div class="Barra">
                     <h3> Siguenos en nuestras <br> Redes Sociales </h3>
                  </div> 

                    <button class="btn-abrir-popup" id="btn-abrir-popup"> Suscríbete a Nuestro Newsletter para recibir nuestras novedades. </button>

                    <div class="overlay" id="overlay">
                    <form class="guardar-correo" action="/Trabajo Sena/SENA/php/correo.php" method="post">
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
                              <input type="submit"
                              value="Suscribir" class="btn-sub" name="boton">
                             </div> 
                            </div>
                      </div> 
                    </form>
                    </div>
              </body> 
         </footer>

        <script src="/Trabajo sena/SENA/script/popup.js"></script> 
        
</body>
</html>

    
  