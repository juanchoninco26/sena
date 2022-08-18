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
    <link href="/estilos/user-externo/editar-perfil.css" rel="stylesheet" type="text/css">
    <title>Editar perfil</title>
</head>

<body>
    <div class="menu-">
        <?php
        include '../../php/include/men-user-extern.php';
        ?>
    </div>

    <div class="body">
        <div class="sec2">
            <div class="sub-sec2">
                <div class="p">
                    <p>Perfil Actual:</p>
                </div>

            </div>

            <div class="subcaja3">
                <div>

                    <?php
                    //ver en minuto 49,16: https://www.youtube.com/watch?v=fCTd8ilXZGI            
                    //ver video:https://www.youtube.com/watch?v=9BLoMGO-XcU
                    //el video muestra quien inicia el software
                    //session_start() esta en el: php/loguin

                    echo "<h3>USUARIO</h3>";

                    if ($nombre = $_SESSION['usuarioExterno']) {
                        echo "<p>$nombre</p>";
                    }
                    ?>
                </div>
                <div class="perfil">
                    <div class="img">
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

        <div class="sec3">
            <div class="caj">
                <?php
                //youtube.com/watch?v=Ct6K4wRjlQQ
                //www.youtube.com/watch?v=0WJ_qFxeWCg
                $nombre1 = $_SESSION['usuarioExterno'];
                $consulta = "SELECT *FROM registro_turista where Nombre='$nombre1'";
                $cons = mysqli_query($ared, $consulta);
                while ($rows = mysqli_fetch_array($cons)) {
                ?>
                    <form class="mod-datos" action="/php/guardar_dat.php" method="post" enctype="multipart/form-data">
                        <div class="dat">
                            <div class="texto">
                                <p>Modificar Datos</p>
                            </div>
                            <p>Nombre</p>
                            <input type="text" name="nombre" id="" value="<?php echo $rows['Nombre']; ?>">
                            <p>Cedula</p>
                            <input type="text" name="cedula" id="" value="<?php echo $row['id_turista']; ?>">
                            <p>Contraseña</p>
                            <input type="password" name="contraseña" id="" value="<?php echo $rows['Contraseña']; ?>">
                            <p>Repetir Contraseña</p>
                            <input type="password" name="repcontraseña" id="" value="<?php echo $rows['Contraseña']; ?>">
                            <p>Fecha de nacimiento</p>
                            <input type="text" name="edad" id="" value="<?php echo $rows['Fecha_nacimiento']; ?>">
                            <div>
                                <input type="submit" value="Actualizar" name="editar_usuario" onclick="alert('datos actualizados');">
                            </div>
                        </div>
                        <div class="min-dat">
                            <p>Telefono</p>
                            <input type="number" name="telefono" id="" value="<?php echo $rows['Telefono']; ?>">
                            <p>Correo</p>
                            <input type="text" name="correo" id="" value="<?php echo $rows['Correo_electronico']; ?>">

                            <p>Foto</p>
                            <input type="file" name="foto" id="seleccionArchivos">
                            <br>
                            <img id="imagenPrevisualizacion">
                            <br>
                            <p>* al actualizar los datos tendra que iniciar <br>sesion nuevamente</p>
                        </div>

                    </form>
                <?php } ?>
                <script src="/script/mostrar.js"></script>
            </div>
        </div>
    </div>
</body>

</html>