<div class="promocion">
        <div>
        <div class="mes">
            <p><b>Promocion</b> del mes</p>
        </div>

        <div class="caja1">
            <form class="subcaja1" action="/php/guardar_dat.php" method="post">
                <p>Titulo</p>
                <input type="text" name="titulo">
                <p>Porcentaje de descuento</p>
                <input type="number" name="%desc" id="">
                <p>Descripcion corta</p>
                <input type="text" name="desc-corta">
                <p>Descripcion larga</p>
                <textarea name="desc-larga" id="" cols="30" rows="3"></textarea>
                <p>Fotografia de referencia</p>
                <input type="file" name="foto" id="">
                <p>Selección rutas</p>
                <input type="file" name="rutas" id="">
                <input type="submit" value="guardar" name="promociones">
            </form>
        </div>
        </div>
    </div>
    <div class="prom-anterior">
        <div class="subcaja2">
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
        <div class="anteriores">
            <div class="txt-prom">
                <p>Promociones anteriores</p>
                <img src="/imagenes/buscador.svg" alt="">
            </div>
            <div class="lista">
                <ol>
                    <!-- mostrar datos de la BD -->
                <?php
                    $consult ="SELECT * FROM promociones;"; 
                    $resutados = mysqli_query($ared, $consult);

                    while ($mostrar = mysqli_fetch_array($resutados)) {?>
                
                     
                    <li><p><?php echo $mostrar['Titulo'];?></p><button><a onclick="return confirm('estas seguro de eliminar este dato?')" href="/php/eliminar.php?Id_promocion=<?php echo $mostrar ['Id_promocion'];?>">x Quitar</a></button></li>
                 <?php } ?>
                
                </ol>
            </div>
        </div>
    </div>