<div class="body">
        <div class="sec2">
            <div class="sub-sec2">
                <div class="p">
                    <p>Perfil Actual</p>
                </div>
                <div class="subcaja2">
                    <div> 
                        <h3>Administrador</h3>
                        <p>Leandro Zuleta</p>
                    </div>
                    <div class="perfil">
                        <img src="/imagenes/user.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="subcaja3">
            <div>
                <?php 
                //ver en minuto 49,16: https://www.youtube.com/watch?v=fCTd8ilXZGI
                //ver video:https://www.youtube.com/watch?v=9BLoMGO-XcU
                //el video muestra quien inicia el software
                //session_start() esta en el: php/loguin
            
                if($nombre=$_SESSION['Nombre']){
                    echo "<p>$nombre</p>";
                    } 
               ?>
             </div>
                <div class="perfil">
                    <img src="/imagenes/user.svg" alt="">
                </div>
            </div>
        </div>
        <div class="sec3">
            <div class="caj">
                <form class="mod-datos" action="/php/guardar_dat.php" method="post">
                            <?php 
                            include '/xampp/xampp/htdocs/360/ruta360/php/puntos-turista-bd.php';
                            //youtube.com/watch?v=Ct6K4wRjlQQ
                           //www.youtube.com/watch?v=0WJ_qFxeWCg
                            
                            $nombre1= $_SESSION['Nombre'];
                            $consulta="SELECT *FROM empleados where Nombre='$nombre1'";
                            $cons=mysqli_query($ared,$consulta);
                              while($rows=mysqli_fetch_array($cons)) {

                            ?>
                    <div class="dat">
                        <div class="texto">
                            <p>Modificar Datos</p>
                        </div>
                        <p>Nombre</p>
                        <input type="text" name="nombre" id="" value="<?php echo $rows['Nombre'];?>">
                        <p>Contraseña</p>
                        <input type="password" name="contraseña" id="" value="<?php echo $rows['Contraseña'];?>">
                        <p>Repetir Contraseña</p>
                        <input type="password" name="repcontraseña" id="" value="<?php echo $rows['Contraseña'];?>">
                        <p>Fecha de nacimiento</p>
                        <input type="text" name="edad" id="" value="<?php echo $rows['Fecha_nacimiento'];?>">
                        <p>Telefono</p>
                        <input type= "number" name="telefono" id="" value="<?php echo $rows['Telefono'];?>">
                    </div>
                    <div class="min-dat">
                        <p>Cargo</p>
                        <input type="text" name="cargo" id="" value="<?php echo $rows['Id_cargo'];?>">
                        <p>Foto</p>
                        <input type="file" name="foto" id="" value="<?php echo $rows['Fotografia'];?>">
                    </div>
                <?php }   ?>
                <div>
                   <input type="submit" value="guardar" name="editar_perfil">
                </div>
                </form>   
            </div>
        </div>
    </div>