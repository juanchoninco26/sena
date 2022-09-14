<?php
include '../../php/puntos-turista-bd.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../estilos/user-externo/men-user-extern.css" rel="stylesheet" type="text/css">
    <link href="../../estilos/user-externo/carrito-expres.css" rel="stylesheet" type="text/css">
    <title>Carrito Expres</title>
</head>
<body>
<?php 
session_start();
  if(!isset($_SESSION['usuarioExterno'])){
    header('Location:../../PaginaPrincipal/login/login.php');
  }else{
  ?>
    <div class="menu-">
        <?php
        include '../../php/include/men-user-extern.php';
        ?>
    </div>
    <div class="content2">
        <div class="carrito">
            <div class="img-car">
                <div>
                    <img src="/imagenes/carrito.svg" alt="" width="50px" height="50px">
                </div>
                <p>Carrito</p>
            </div>
            <div class="us">
                <div class="info">
                    <div class="usuario">
                        <?php
                        echo "<h3>usuario</h3>";
                        if ($nombre = $_SESSION['usuarioExterno']) {
                            echo "<p>$nombre</p>";
                        }
                        ?>
                    </div>
                    <div class="foto">
                        <?php

                        $nombre1 = $_SESSION['usuarioExterno'];
                        $result = $ared->query("SELECT * FROM registro_turista WHERE Nombre = '$nombre1'");
                        while ($mostrar = mysqli_fetch_array($result)) {
                        ?>
                            <img src="<?php echo $mostrar['Fotografia']; ?>" alt="">
                        <?php } ?>
                    </div>
                </div>
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
                                <div class="info-">
                                    <div class="boton"><button>X Quitar</button></div>
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
                            if (!isset($_SESSION['total_carrito'])) {
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
                <div><input type="button" value="Comprar" class="botn-compra"></div>
            </div>
        </div>
    </div>
<?php 
} 
?>
</body>
</html>