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
                session_start();
                if($row=$_SESSION['Id_cargo']==1){
                    echo "<h3>Administrador</h3>";
                }elseif($row=$_SESSION['Id_cargo']==2){
                    echo "<h3>Asesor</h3>";
                }elseif($row=$_SESSION['Id_cargo']==3){
                    echo "<h3>Contador</h3>";
                }
                             
                //ver video:https://www.youtube.com/watch?v=9BLoMGO-XcU
                //el video muestra quien inicia el software
                //session_start() esta en el: php/loguin
            
                $nombre=$_SESSION['username'];  
                echo "<p>$nombre</p>";
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
                            //youtube.com/watch?v=Ct6K4wRjlQQ
                            if(isset($_GET['Nombre'])) {
                            $consulta="SELECT* FROM empleados WHERE Nombre='".$_GET['Nombre']."'";
                            $con=mysqli_query($ared,$consulta);
                            while($row=mysqli_fetch_array($con)){
                    
                            ?>
                    <div class="dat">
                        <div class="texto">
                            <p>Modificar Datos</p>
                        </div>
                        <p>Nombre</p>
                        <input type="text" name="nombre" id="" value="<?php echo $row['Nombre'];?>">
                        <p>Contraseña</p>
                        <input type="password" name="contraseña" id="" value="<?php echo $row['Contraseña'];?>">
                        <p>Repetir Contraseña</p>
                        <input type="password" name="repcontraseña" id="" value="<?php echo $row['Contraseña'];?>">
                        <p>Fecha de nacimiento</p>
                        <input type="number" name="edad" id="" value="<?php echo $row['Fecha_nacimiento'];?>">
                        <p>Telefono</p>
                        <input type= "number" name="telefono" id="" value="<?php echo $row['Telefono'];?>">
                    </div>
                    <div class="min-dat">
                        <p>Cargo</p>
                        <input type="text" name="cargo" id="" value="<?php echo $row['Id_cargo'];?>">
                        <p>Foto</p>
                        <input type="file" name="foto" id="" value="<?php echo $row[' Fotografia'];?>">
                    </div>
                <?php  }
            } ?>
                </form>
                <div>
                <input type="submit" value="guardar" name="editar_perfil">
                </div>
                
                
            </div>
        </div>
    </div>