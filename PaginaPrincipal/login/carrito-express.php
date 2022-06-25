<?php include '../../php/puntos-turista-bd.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/estilos/user-externo/men-user-extern.css" rel="stylesheet" type="text/css">
    <link href="/estilos/user-externo/carrito-expres.css" rel="stylesheet" type="text/css">
    <title>Carrito Expres</title>
</head>
<body>
    <div class="menu-">
    <?php 
    include '/xampp/xampp/htdocs/360/ruta360/php/include/men-user-extern.php';
    ?>
    </div>
    <div class="content2">
        <div class="carrito">
            <div class="img-car">
                <div >
                    <img src="/imagenes/carrito.svg" alt="" width="50px" height="50px">
                </div>
                <p>Carrito</p>
            </div>
            <div class="us">
              <div class="info">
               <div class="usuario">
                 <h3>usuario</h3>
                 <p>nombre</p>
               </div>
               <div class="foto">
                 <img src="/imagenes/user.svg" alt="">
               </div>
              </div>
            </div>
        </div>
        <br>
        <div class="productos1">
            <div class="product">
                <?php  
                    $consult ="SELECT * FROM lugares_turisticos"; 
                    $resutados = mysqli_query($ared, $consult);
                    while ($mostrar = mysqli_fetch_array($resutados)) {
                ?>
                <div class="info-">
                    <div class="boton"><button>X Quitar</button></div>
                    <div><p><?php echo $mostrar['Nombre']; ?></p></div>
                </div>
                <?php } ?>
            </div>
            <br>
            <div class="compra">
                <div class="total"><p>Total: <span>$800.000</span></p></div>
                <br>
                <div><input type="button" value="Comprar" class="botn-compra"></div>
            </div>
        </div>
    </div>
</body>
</html>