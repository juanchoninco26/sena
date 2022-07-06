<?php include __DIR__.'/php/puntos-turista-bd.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos/login.css" rel="stylesheet" type="text/css">
    <title>login</title>
</head>
<body>
    <!--video ejemplo: https://www.youtube.com/watch?v=GHdOSI9hQvc-->
    <div class="caja">
        <div> 
            <div class="raya"></div>
            <div class="letra">
                <h1>Espacio exclusivo para <strong>trabajadores</strong></h1>
            </div>
        </div>
        <div class="contenedor">
            <div class="centrar">
                <div class="img-centro">
                    <img src="imagenes/logo-360.png">
                </div>
                <form class="formulario" action="/php/login2.php" method="POST">
                    <div class="letra2">
                        <h1>INICIAR SESIÓN</h1>
                    </div>
                    <div class="user">
                        <h2>usuario</h2>
                        <input type="text" placeholder="" name="username"> 
                    </div>
                    <div class="password">
                        <h2>contraseña</h2>
                        <input type="password" placeholder="" name="password"> 
                    </div>
                    <button type="submit" class="login" name="loguin"><a>Login</a></button>
                   <!-- los link (asesor y contador) son solo para dar referencia a esas secciones despues se eliminaran
                    <a href="/usuarios/asesor/reservaciones.php">Asesor</a>
                    <a href="/usuarios/contador/estadisticas.php">Contador</a>-->
                </form>
                <script></script>
            </div>
        </div>
    </div>    
</body>
</html>