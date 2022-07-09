<<<<<<< HEAD
<?php include '../../php/puntos-turista-bd.php';?>
=======
<?php include '../../php/puntos-turista-bd.php';
session_start();
?>
>>>>>>> 12af2e34aa95221cb6e9e31341951a9a438141f8
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

                    if ($nombre = $_SESSION['Nombre']) {
                        echo "<p>$nombre</p>";
                    }
                    ?>
                </div>
                <div class="perfil">
                    <div class="img">
<<<<<<< HEAD
                        <?php
                        $nombre1 = $_SESSION['Nombre'];
                        $result = $ared->query("SELECT * FROM registro_turista WHERE Nombre = '$nombre1'");
                        while ($mostrar = mysqli_fetch_array($result)) {
                        ?>
                            <img src="<?php echo $mostrar['Fotografia']; ?>" alt="">
                        <?php } ?>
=======
                    <?php
                      include '/xampp/xampp/htdocs/360/ruta360/php/puntos-turista-bd.php'; 
                        $nombre1= $_SESSION['Nombre'];
<<<<<<< HEAD
                        $result = $ared->query("SELECT * FROM empleados WHERE Nombre = '$nombre1'");
=======
                        $result = $ared->query("SELECT * FROM registro_turista WHERE Nombre = '$nombre1'");
>>>>>>> 12af2e34aa95221cb6e9e31341951a9a438141f8
                        while($row=mysqli_fetch_assoc($result)){
                            
                    ?>
                      <img src="data:image/jpg;base64,<?php echo base64_encode($row['Fotografia']);?>">
                    <?php }?>
>>>>>>> 4a4671912a0e29421c49555da31ab8ba4f112b9f
                    </div>
                </div>
            </div>
        </div>

        <div class="sec3">
            <div class="caj">
                <form class="mod-datos" action="/php/guardar_dat.php" method="post">
<<<<<<< HEAD
                    <?php
                    include '/xampp/xampp/htdocs/360/ruta360/php/puntos-turista-bd.php';
                    //youtube.com/watch?v=Ct6K4wRjlQQ
                    //www.youtube.com/watch?v=0WJ_qFxeWCg


                    $nombre1 = $_SESSION['Nombre'];
                    $consulta = "SELECT *FROM registro_turista where Nombre='$nombre1'";
                    $cons = mysqli_query($ared, $consulta);
                    while ($rows = mysqli_fetch_array($cons)) {
                    ?>
                        <div class="dat">
                            <div class="texto">
                                <p>Modificar Datos</p>
                            </div>
                            <p>Nombre</p>
                            <input type="text" name="nombre" id="" value="<?php echo $rows['Nombre']; ?>">
                            <p>Cedula</p>
                            <input type="text" name="cedula" id="" value="<?php echo $rows['id_turista']; ?>">
                            <p>Contraseña</p>
                            <input type="password" name="contraseña" id="" value="<?php echo $rows['Contraseña']; ?>">
                            <p>Repetir Contraseña</p>
                            <input type="password" name="repcontraseña" id="" value="<?php echo $rows['Contraseña']; ?>">
                            <p>Fecha de nacimiento</p>
                            <input type="text" name="edad" id="" value="<?php echo $rows['Fecha_nacimiento']; ?>">
                            <div>
                                <input type="submit" value="Actualizar" name="editar_perfil" onclick="alert('datos actualizados');">
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
                    <?php }   ?>
                </form>
                <script src="/script/mostrar.js"></script>
=======
                            <?php 
                            include '/xampp/xampp/htdocs/360/ruta360/php/puntos-turista-bd.php';
                            //youtube.com/watch?v=Ct6K4wRjlQQ
                           //www.youtube.com/watch?v=0WJ_qFxeWCg
        
                            
                            $nombre1= $_SESSION['Nombre'];
<<<<<<< HEAD
                            $consulta="SELECT *FROM empleados where Nombre='$nombre1'";
=======
                            $consulta="SELECT *FROM registro_turista where Nombre='$nombre1'";
>>>>>>> 12af2e34aa95221cb6e9e31341951a9a438141f8
                            $cons=mysqli_query($ared,$consulta);
                            while($rows=mysqli_fetch_array($cons)) {
                            ?>
                    <div class="dat">
                        <div class="texto">
                            <p>Modificar Datos</p>
                        </div>
                        <p>Nombre</p>
                        <input type="text" name="nombre" id="" value="<?php echo $rows['Nombre'];?>">
                        <p>Cedula</p>
<<<<<<< HEAD
                        <input type="text" name="cedula" id="" value="<?php echo $rows['Id_empleado'];?>" >
=======
                        <input type="text" name="cedula" id="" value="<?php echo $rows['id_turista'];?>" >
>>>>>>> 12af2e34aa95221cb6e9e31341951a9a438141f8
                        <p>Contraseña</p>
                        <input type="password" name="contraseña" id="" value="<?php echo $rows['Contraseña'];?>">
                        <p>Repetir Contraseña</p>
                        <input type="password" name="repcontraseña" id="" value="<?php echo $rows['Contraseña'];?>">
                        <p>Fecha de nacimiento</p>
                        <input type="text" name="edad" id="" value="<?php echo $rows['Fecha_nacimiento'];?>">
                          <div>
                            <input type="submit" value="Actualizar" name="editar_perfil" onclick="alert('datos actualizados');">
                          </div>
                    </div> 
                    <div class="min-dat">
                        <p>Telefono</p>
                        <input type= "number" name="telefono" id="" value="<?php echo $rows['Telefono'];?>">
                        <p>Correo</p>
<<<<<<< HEAD
                        <input type= "text" name="correo" id="" value="<?php echo $rows['correo'];?>">
=======
                        <input type= "text" name="correo" id="" value="<?php echo $rows['Correo_electronico'];?>">
>>>>>>> 12af2e34aa95221cb6e9e31341951a9a438141f8
                            
                        <p>Foto</p>
                        <input type="file" name="foto" id="seleccionArchivos">
                        <br>
                        <img id="imagenPrevisualizacion">
                        <br>
                        <p>* al actualizar los datos tendra que iniciar <br>sesion nuevamente</p>
                    </div>
                <?php }   ?>
                </form>  
                <script src="/script/mostrar.js"></script> 
>>>>>>> 4a4671912a0e29421c49555da31ab8ba4f112b9f
            </div>
        </div>
    </div>
</body>

</html>