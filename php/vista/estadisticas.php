<div class="grafico-centro">
        <div class="graficos">
            <p>graficos</p>
        </div>
        <div class="graficos">
            <p>graficos</p>
        </div>
        <div class="graficos">
            <p>graficos</p>
        </div>
    </div>
    
    <div class="grafico-derecho">
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
        <div class="graficos">
            <p>graficos</p>
        </div>
        <div class="graficos">
            <p>graficos</p>
        </div>
    </div>