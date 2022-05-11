<div class="sec2">
        <div class="pun-habilt">
            <div class="titulo">
                <p>Puntos habilitados</p>
                <img src="/imagenes/buscador.svg" alt="">
            </div>
            <div class="lista">
                <ol>
                                <?php
                    $consult ="SELECT * FROM generarpuntos"; 
                    $resutados = mysqli_query($ared, $consult);

                    while ($mostrar = mysqli_fetch_array($resutados)) {?>
                
                     
                    <li> <?php echo $mostrar['puntos_manualmente'];?> <button><a onclick="return confirm('estas seguro de eliminar este dato?')" href="/php/elim-punt-turist.php?id=<?php echo $mostrar['Cod_descuento'];?>">x Quitar</a></button></li>
                 <?php } ?>
                </ol>
                
            </div>
        </div>
    </div>
    <div class="sec3">
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
        <div class="valor-desc">
            <!-- se envian los datos mediante un action con metodo post-->
            <form  action="/php/guardar_dat.php" method="post">
                <p>Usuario:</p>
                <input type="text" name="usuario">
                <p>Generar puntos manualmente:</p>
                <input type="text" name="puntos">
                <p>Valor Descuento:</p>
                <input type="text" name="desc">
                <p>Valor Des. Acomulado:</p>
                <input type="text" name="acom">
                <div>
                  <input type="submit" value="guardar" name="guardar_punt">
                </div>
            </form>  
        </div>
        <div class="punt-gen">
            <p>Puntos generados/Sem</p>
            <p>1.200</p>
            <p>Puntos generados/Mes</p>
            <p>1.200</p>
            <p>Puntos generados/Año</p>
            <p>1.200</p>
        </div>
    </div>