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
        <div class="graficos">
            <p>graficos</p>
        </div>
        <div class="graficos">
            <p>graficos</p>
        </div>
    </div>