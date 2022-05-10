<div class="sec2">
        <h2>Usuario actual</h2>
        <div class="subcaja2">
            <div>
                <h3>Administrador</h3>
                <p>Leandro Zuleta</p>
            </div>
            <div class="perfil">
                <img src="/imagenes/user.svg" alt="">
            </div>
        </div>
        <div class="otros-user">
            <div class="titulo">
                <h2>Otros Usuarios</h2>
            </div>
            <div class="lista">
                <ol>
                <?php
                    $consult ="SELECT* FROM empleados"; 
                    $resutados = mysqli_query($ared, $consult);

                    while ($mostrar = mysqli_fetch_array($resutados)) { ?>
                
                <form action="/php/elim_usuario.php" method="GET">
                <li><?php echo $mostrar['Nombre'];?><button><a onclick="return confirm('estas seguro de eliminar este dato?') " href="/php/eliminar.php?Id_empleado=<?php echo $mostrar ['Id_empleado'];?>">x Quitar</a></button></li>
                 <?php } ?>
                 </form>
                </ol>
            </div>
        </div>
    </div>
    <div class="sec3">
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
        <div class="agre-user">
            <div class="titulo">
                <h2>Agregar Usuario</h2>
            </div>
            <?php 
            $result =mysqli_query($ared, "SELECT Id_cargo,Nombre_cargo FROM cargo");
            ?>
            <form class="add-user" action="/php/guardar_dat.php" method="POST">
                <p>Nombre</p>
                <input type="text" name="nombre" id="">
                <p>Contraseña</p>
                <input type="password" name="contraseña" id="">
                <p>Fecha de nacumiento</p>
                <input type="date" name="edad" id="">
                <p>telefono</p>
                <input type="text" name="telefono" id="">
                <p>Cargo</p>
                <select name="cargo" id="">
                    <?php 
                    while ($fila = $result->fetch_assoc()):
                        $id = $fila['Id_cargo'];
                        $nombre=$fila['Nombre_cargo'];
                        echo "<option value=$id>$nombre</option>";
                    endwhile;
                    ?>
                </select>
                <p>Fotografria</p>
                <input type="file" name="foto" id="">
              <div>
                <input type="submit" value="guardar" name="crear_usuario"> 
              </div> 
            </form>
        </div>
    </div>