<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/estilos/user-externo/login.css">
    <title>usuario</title>
</head>
<body >
<div class="caja">
        <div> 
            <div class="raya"></div>
            <div class="letra">
                <h1><strong>Club 360. </strong><br>Espacio exclusivo para clientes VIP.</h1>
            </div>
        </div>
        <div class="contenedor">
            <div class="centrar">
                <div class="img-centro">
                    <img src="/imagenes/360.png">
                </div>
                <form class="formulario" action="/php/login2.php" method="POST">
                    <div class="letra2">
                        <h1>INICIAR SESIÓN</h1>
                    </div>
                    <div class="user">
                        <h2>Usuario</h2>
                        <input type="text" placeholder="" name="username"> 
                    </div>
                    <div class="password">
                        <h2>Contraseña</h2>
                        <input type="password" placeholder="" name="password"> 
                    </div>
                    <button type="submit" class="login" name="loguin"><a>Entrar</a></button>
                    <p>¿No tienes una cuenta?<a href="">Crear una.</a></p>
                </form>
                <script></script>
            </div>
        </div>
    </div>
</body>
</html>