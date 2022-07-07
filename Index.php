<?php include ("./php/puntos-turista-bd.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página Principal</title>
    <link rel="stylesheet" href="./estilos/Estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>
<body>  
   <header>
          <div> 
          <img src="./imagenes/360.png.png.png" alt="" width="130" height="130" style="float: left"/> 
          <h1>Ruta 360 Gigante</h1>
       </div>

       <nav id="menu-h">
         <ul>
           <li><a target="blank" href="Index.php"><img src="./imagenes/home.png.png" style="width: 22px; height:22px;"> Inicio</a></li>
           <li><a target="blank" href="./PaginaPrincipal/Sitios.php">Sitios</a></li>
           <li><a target="blank" href="./PaginaPrincipal/Paquetes.php">Paquetes</a></li>
<<<<<<< HEAD
           <li><a target="blank" href="./PaginaPrincipal/Carrito.php"><img src="./imagenes/LC-PNG.png" style="width: 24px; height: 24px;">  Carrito</a></li>
=======
<<<<<<< HEAD
           <li><a target="blank" href="./PaginaPrincipal/Carrito.php"><img src="./imagenes/LC-PNG.png" style="width: 24px; height: 24px;">  Carrito</a></li>
=======
<<<<<<< HEAD
           <li><a target="blank" href="./PaginaPrincipal/Carrito.php"><img src="./imagenes/LC-PNG.png" style="width: 24px; height: 24px;">  Carrito</a></li>
=======
           <li><a target="blank" href="./PaginaPrincipal/Carrito.php"><img src="/Trabajo Sena/SENA/imagenes/LC-PNG.png" style="width: 24px; height: 24px;">  Carrito</a></li>
>>>>>>> d9d0045b7a126d1d3159cbc59e2e40dbbc0100d9
>>>>>>> 12af2e34aa95221cb6e9e31341951a9a438141f8
>>>>>>> f48882082773e3a22af3e8ba6fed53ad7d8effa0
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
                 <li><a href="./PaginaPrincipal/Promo.php">Conocer más</a></li>
                </div>
                 <h6>Contacto <br> Asesor <br> Comercial</h6>
                 <nav id="menu-h2"></nav> 
                 <div class="Logo">
                  <div class="Logo2">
                  <li><a href="https://api.whatsapp.com/send?phone=573203432927&app=facebook&entry_point=page_cta"><img src="./imagenes/LogoAsesor.png.png" width="60px" height="60px"></a></li>
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
                    <li><a href="https://www.facebook.com/Ruta360gigante/"><img src="./imagenes/LogoFacebook.png.png"width="50px" height="50px"></a></li> 
                    <li><a href="https://www.instagram.com/ruta360gigante/"><img src="./imagenes/LogoInstagram.png.png"width="50px" height="50px"></a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=573203432927&app=facebook&entry_point=page_cta"><img src="./imagenes/LogoWhatsapp.png.png"width="50px" height="50px"></a></li> 
                    <li><a href="https://www.youtube.com/channel/UCYC0Syd3ESTtsBigvNC7oyg"><img src="./imagenes/LogoYouTube.png.png"width="50px" height="50px"></a></li>
                    <br> 
                  </div> 
                    
                  <div class="Barra">
                     <h3> Siguenos en nuestras <br> Redes Sociales </h3>
                  </div> 

                    <button class="btn-abrir-popup" id="btn-abrir-popup"> Suscríbete a Nuestro Newsletter para recibir nuestras novedades. </button>

                    <div class="overlay" id="overlay">
                    <form class="guardar-correo" action="../php/correo.php" method="post">
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

        <script src="./script/popup.js"></script> 
        
</body>
</html>

    
  