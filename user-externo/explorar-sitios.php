<?php include '../php/puntos-turista-bd.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/estilos/user-externo/men-user-extern.css" rel="stylesheet" type="text/css">
    <link href="/estilos/user-externo/explorar-sit.css" rel="stylesheet" type="text/css">
    <title>Explorar sitios</title>
</head>
<body>
<div class="main">
    <?php 
    include '/xampp/xampp/htdocs/360/ruta360/php/include/men-user-extern.php';
    ?>
    </div>
    <div class="block">
    <div class="user">
        <div class="usercaja">
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
    <div class="container">
        <div class="subcontainer">
            <p><strong>sitios</strong> locales</p>
            <div class="imagenes">
                <div>
                    <img src="/imagenes/cascada.jpg" alt="" width="90px" height="96px">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="subcontainer">
            <p><strong>sitios</strong> Regionales</p>
            <div class="imagenes">
                <div>
                    <img src="/imagenes/cascada.jpg" alt="" width="90px" height="96px">
                </div>
            </div>
        </div>
        </div>
    <div class="container">
    <div class="subcontainer">
            <p><strong>sitios</strong> Nacionales</p>
            <div class="imagenes">
                <div>
                    <img src="/imagenes/cascada.jpg" alt="" width="90px" height="96px">
                </div>
                <div>
                    <img src="/imagenes/cascada.jpg" alt="" width="90px" height="96px">
                </div>
                <div>
                    <img src="/imagenes/cascada.jpg" alt="" width="90px" height="96px">
                </div>
                <div>
                    <img src="/imagenes/cascada.jpg" alt="" width="90px" height="96px">
                </div>
            </div>
            <div>
                <img src="/imagenes/derecha.svg" alt="">
            </div>
        </div>
    </div>
    </div>
</body>
</html>