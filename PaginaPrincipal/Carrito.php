<?php
include("../php/puntos-turista-bd.php");
session_start();
?>
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
            <img src="../imagenes/360.png.png.png" alt="" width="130" height="130" style="float: left" />
            <h1>Ruta 360 Gigante</h1>
        </div>

        <nav id="menu-h">
            <ul>
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
                <li><a href="../Index.php"><img src="../imagenes/home.png.png" style="width: 22px; height:22px;"> Inicio</a></li>
                <li><a href="../PaginaPrincipal/Sitios.php">Sitios</a></li>
                <li><a href="../PaginaPrincipal/Paquetes.php">Paquetes</a></li>
                <li><a href="../PaginaPrincipal/Carrito.php"><img src="../imagenes/LC-PNG.png" style="width: 24px; height: 24px;">Carrito</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="Carrito">
            <div><img src="../imagenes/Carrito2.png.png" alt="Carrito"></div>

            <div>
                <h1>&nbsp&nbspCarrito</h1>
            </div>
        </div>
        <br>
        <div class="productos1">
            <div class="product">
                <?php
                if (isset($_SESSION['carrito'])) {
                    $total = 0;
                    $carrito_compras = $_SESSION['carrito'];
                    for ($i = 0; $i <= count($carrito_compras) - 1; $i++) {
                        if (isset($carrito_compras[$i])) {
                            if ($carrito_compras[$i] != NULL) {
                                $totals = $carrito_compras[$i]['precio'];
                                $total = $total + ($totals * $carrito_compras[$i]['cantidad']);
                ?>
                                <div class="infom">
                                    <div class="boton"><a href="../php/carritoCompras.php?eliminar_car">X Quitar</a></div>
                                    <div>
                                        <p><?php echo $carrito_compras[$i]['nombre']; ?></p>
                                        <p>$<?php echo number_format($carrito_compras[$i]['precio']); ?></p>
                                    </div>
                                </div>
                <?php                            
                            }
                        }
                        $_SESSION['total_carrito'] = $total;
                    }
                }
                ?>
            </div>
            <br>
            <div class="compra">
                <div class="total">
                    <p>Total:
                        <span>
                            <?php
                            if (empty($_SESSION['total_carrito'])){
                                $_SESSION['total_carrito'] = 0;
                            } else {
                                $_SESSION['total_carrito'];
                            }
                            print_r(number_format($_SESSION['total_carrito']));
                            ?>
                        </span>
                    </p>
                    
                </div>
                <br>
                <nav id="Comprar">                   
                    <ul>
                        <li><a href="../../PaginaPrincipal/login/login.php"> Comprar </a></li>
                    </ul>
                </nav>
                <br>
                <form action="../php/carritoCompras.php" method="POST" id="limpiar_car">
                    <button name='limpiar'>limpiar carrito</button>
                </form>
            
            </div>
    </main>

    <footer>
        <h4>Ruta 360 Gigante - todos los derechos reservados ©</h4>
        <h5>Síguenos</h5>

        <div class="redes">
            <ul class="sociales">
                <li><a href="https://www.facebook.com/Ruta360gigante/"><img src="../imagenes/LogoFacebook.png.png" width="50px" height="50px"></a></li>
                <li><a href="https://www.instagram.com/ruta360gigante/"><img src="../imagenes/LogoInstagram.png.png" width="50px" height="50px"></a></li>
                <li><a href="https://api.whatsapp.com/send?phone=573203432927&app=facebook&entry_point=page_cta"><img src="../imagenes/LogoWhatsapp.png.png" width="50px" height="50px"></a></li>
                <li><a href="https://www.youtube.com/channel/UCYC0Syd3ESTtsBigvNC7oyg"><img src="../imagenes/LogoYouTube.png.png" width="50px" height="50px"></a></li>
                <br>
        </div>
    </footer>

</body>

</html>