<?php include ("../php/puntos-turista-bd.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Pago</title>
    <link rel="stylesheet" href="../estilos/EstilosPago.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
</head>
<body>
<body background="../imagenes/FondoChica.png" bgcolor="aqua"></body>
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
            <li><a href="../PaginaPrincipal/Carrito.php"><img src="../imagenes/LC-PNG.png" style="width: 24px; height: 24px;">Carrito</a></li>
           </ul>
        </nav>
    </header>
          
    <main>
      <nav id="Botton"> 
        <ul>
          <li><a href="../PaginaPrincipal/Carrito.php"> <<< Volver </a></li>
        </ul>
      </nav>

        <div class="N"> 
        <h2>Nombre</h2> 
        </div>
        <div class="H"> 
        <h2>Hora</h2>
        </div>

          <input type="text" class="campo" placeholder=""> 
         <div class="E"> 
          <input type="text" class="campo2" placeholder="">
        </div>

        <div class="T"> 
          <h2>N°Teléfono</h2> 
          </div>
          <div class="P"> 
          <h2>N°Personas</h2>
          </div>

          <input type="text" class="campo" placeholder=""> 
         <div class="E"> 
          <input type="text" class="campo2" placeholder="">
        </div>

        <div class="F"> 
          <h2>Fecha</h2> 
          </div>
          <div class="C"> 
          <h2>Código descuento</h2>
          </div>

          <input type="text" class="campo" placeholder=""> 
         <div class="E"> 
          <input type="text" class="campo2" placeholder="">
        </div>

        <nav id="Botton2"> 
          <ul>
            <li><a href=""> Acordar Pago </a></li>
          </ul>
        </nav>

        <div class="texto">
          <p>Nota: con el recibo pagas en efectivo
            cuando estés en el punto acordado
            con guía turístico.</p> 
        </div> 

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

        <div class="TextoP">
          <h1>¡Estás a un
            paso de vivir
            una experi-<br>encia cero
            estrés!</h1> 
        </div>
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