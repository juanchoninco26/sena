<div class="clendario">
        <div class="calen-google">
            <iframe src="https://calendar.google.com/calendar/embed?src=juanchoninco26%40gmail.com&ctz=America%2FBogota" style="border: 0" width="380" height="400" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>
        
    <div class="administrador">
        <div class="subcaja2">
            <div> 
                <?php 
                //ver en minuto 49,16: https://www.youtube.com/watch?v=fCTd8ilXZGI
                session_start();
                
                if($row=$_SESSION['Id_cargo']==1){
                    echo "<h3>Administrador</h3>";
                }if($row=$_SESSION['Id_cargo']==2){
                    echo "<h3>Asesor</h3>";
                }if($row=$_SESSION['Id_cargo']==3){
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
        <div class="reservas">
            <div class="subreservas">
                <div>
                  <h3>reservas pendientes</h3>  
                </div>
                <ol>
                <?php 
                
                     $consult="SELECT* FROM reservas";
                     $resultados= mysqli_query($ared,$consult);

                     
                     while ($mostrar=mysqli_fetch_array($resultados)){;
                ?>
                    <li><p><?php echo $mostrar['id_reservas'];?></p><a href="">confirmar</a><a href="">eliminar</a></li>
                    <?php }?>
                </ol>
            </div>
        </div>
        <div class="informacion">
            <div class="letras">
                <h3> Informacion</h3>
            </div>
            <div class="subinformacion">
                <div class="cajita">
                    <p>ruta del cafe</p>
                </div>
                <div class="letras">
                    <p><b>Nombre:</b>Michael Garcia</p>
                    <p><b>N. Identificacion:</b>10032014</p>
                    <p><b>N. Telefono:</b></p>
                    <p><b>Fecha:</b>24/05/2021</p>
                </div>
            </div>
        </div>
    </div>