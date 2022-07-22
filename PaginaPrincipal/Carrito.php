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
           <img src="../imagenes/360.png.png.png" alt="" width="130" height="130" style="float: left"/> 
           <h1>Ruta 360 Gigante</h1>
        </div>

        <nav id="menu-h">
          <ul>
            <li><a target="blank" href="../Index.php"><img src="../imagenes/home.png.png" style="width: 22px; height:22px;"> Inicio</a></li>
            <li><a target="blank" href="../PaginaPrincipal/Sitios.php">Sitios</a></li>
            <li><a target="blank" href="../PaginaPrincipal/Paquetes.php">Paquetes</a></li>
            <li><a target="blank" href="../PaginaPrincipal/Carrito.php"><img src="../imagenes/LC-PNG.png" style="width: 24px; height: 24px;">Carrito</a></li>
           </ul>
        </nav>
    </header>

    <main>
        <div class="Carrito"> 
          <div><img src="../imagenes/Carrito2.png.png" alt="Carrito"></div>
          
          <div><h1>&nbsp&nbspCarrito</h1></div> 
        </div>
        <br>
        <div class="productos1">
            <div class="product">
                <?php
                $consult = "SELECT * FROM lugares_turisticos";
                $resutados = mysqli_query($ared, $consult);
                while ($mostrar = mysqli_fetch_array($resutados)) {
                ?>
                    <div class="infom">
                        <div class="boton"><button>X Quitar</button></div>
                        <div>
                            <p><?php echo $mostrar['Nombre'];?></p><p>$<?php echo $mostrar['Precio'];?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <br>
            <div class="compra">
                <div class="total">
                    <p>Total: <span>$800.000</span></p>
                </div>
                <br>
                <nav id="Comprar"> 
           <ul>
             <li><a href="../PaginaPrincipal/Pago.php"> Comprar </a></li>
           </ul>
          </nav>
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

</body>
</html>