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
    <link rel="stylesheet" href="/estilos/user-externo/registrarse.css">
    <!-- CSS only 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">-->
    <title>Registrarse</title>
</head>

<body>

    <div class="caja">
        <div class="volver">
            <a href="login.php">volver</a>
        </div>
        <div>
            <div class="letra">
                <h1><strong>REGISTRO.</strong></h1>
            </div>
            <div class="raya"></div>
        </div>
        <div class="contenedor">
            <div class="centrar">
                <div class="img-centro">
                    <img src="/imagenes/logo-360.png">
                </div>
                <form class="formulario" action="/php/guardar_dat.php" method="POST">
                    <div class="user">
                        <h2>Nombre</h2>
                        <input type="text" pattern="[A-Z,a-z,0-9_-*]{1,15}" required placeholder="" name="nombre">
                        <h2>Correo</h2>
                        <input type="email" pattern="[A-Z,a-z,0-9_-*]{1,15}" required placeholder="" name="correo">
                        <h2>Telefono</h2>
                        <input type="number" pattern="[A-Z,a-z,0-9_-*]{1,15}" required placeholder="" name="telefono">
                        <h2>Identificación</h2>
                        <input type="number" pattern="[A-Z,a-z,0-9_-*]{1,15}" required placeholder="" name="identificacion">
                        <h2>Fecha de Nacimiento</h2>
                        <input type="date" pattern="[A-Z,a-z,0-9_-*]{1,15}" required placeholder="" name="nacimiento">
                    </div>
                    <div class="password">
                        <h2>Contraseña</h2>
                        <input type="password" pattern="[A-Z,a-z,0-9_-*]{4,15}" required placeholder="" name="contraseña">
                        <div class="password">
                            <h2>Repetir&nbsp&nbspContraseña</h2>
                            <input type="password" pattern="[A-Z,a-z,0-9_-*]{4,15}" required placeholder="" name="repContraseña">
                        </div>
                        <div class="mensaje">
                            <?php
                            mensajeRegistro();
                            ?>
                        </div>
                        <button type="submit" class="login" name="registrarse"><a>Registrarse</a></button>

                    </div>
                </form>
                <script></script>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>