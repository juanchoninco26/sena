<?php
include '../../php/puntos-turista-bd.php';
include '../../php/include/cargo.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="stylesheet" href="../../estilos/user-externo/login.css">
    <!-- CSS only 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
    <title>usuario</title>
</head>

<body>

    <div class="caja">
        <div class="texto">
            <div class="raya"></div>
            <div class="letra">
                <h1><strong>Club 360. </strong><br>Espacio exclusivo para clientes VIP.</h1>
            </div>
        </div>
        <div class="contenedor">
            <div class="centrar">
                <div class="img-centro">
                    <img src="/imagenes/logo-360.png">
                </div>
                <form class="formulario" action="/php/login2.php" method="POST">
                    <div class="letra2">
                        <h1>INICIAR SESIÓN</h1>
                    </div>
                    <div class="user">
                        <h2>Usuario</h2>
                        <input type="text" pattern="[A-Z,a-z,0-9_-*]{1,15}" required placeholder="" name="usuario">
                    </div>
                    <div class="password">
                        <h2>Contraseña</h2>
                        <input type="password" pattern="[A-Z,a-z,0-9_-*]{1,15}" required placeholder="" name="contraseña">
                    </div>
                    <div class="mensaje">
                        <?php 
                        //funcion en cargo.php
                        mensajeUno();
                        ?>
                    </div>
                    <button type="submit" class="login" id="login" name="loguin-extern"><a>Entrar</a></button>
                    <p>¿No tienes una cuenta?<a href="/PaginaPrincipal/login/registrarse.php">Crear una.</a></p>
                </form>
                <script src='/script/mostrar.js'></script>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>