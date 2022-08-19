<?php include '../../php/puntos-turista-bd.php';
session_start();
?>
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
<?php 
  if(isset($_SESSION['usuarioExterno'])==($_SESSION['NombreUsuarioExterno']) and ($_SESSION['passwordUser'])==($_SESSION['contraseñaUsuarioExterno'])){
  ?>
    <div class="main">
        <?php
        include '../../php/include/men-user-extern.php';
        ?>
    </div>
    <div class="block">
        <div class="user">
            <div class="usercaja">
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
        <?php 
        $sitios="sitios";
        ?>
        <div class="container">
            <div class="subcontainer">
                <div>
                    <p><strong>sitios</strong> locales</p>
                </div>
                <div class="imagenes">
                    <?php
                        $resultado3= $ared->query("SELECT * FROM $sitios");
                        while($mostrar=mysqli_fetch_array($resultado3)){
                    ?>
                    <div>
                        <img src="<?php echo $mostrar['locales'];?>" alt="" width="90px" height="96px">
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="subcontainer">
                <div>
                    <p><strong>sitios</strong> Regionales</p>
                </div>
                <div class="imagenes">
                    <?php
                        $resultado3= $ared->query("SELECT * FROM $sitios");
                        while($mostrar=mysqli_fetch_array($resultado3)){
                    ?>
                    <div>
                        <img src="<?php echo $mostrar['nacionales'];?>" alt="" width="90px" height="96px">
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="subcontainer">
                <div>
                    <p><strong>sitios</strong> Nacionales</p>
                </div>
                
                <div class="imagenes">
                    <?php 
                        $resultado3= $ared->query("SELECT * FROM $sitios");
                        while($mostrar=mysqli_fetch_array($resultado3)){
                    ?>
                    <div>
                        <img src="<?php echo $mostrar['nacionales'];?>" alt="" width="90px" height="96px">
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
</body>
</html>