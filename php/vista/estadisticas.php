
<div class="graficocentro">
    <div class="graficos">
       <canvas id="myChart" width="auto" height="auto"></canvas>
    </div>
    <div class="graficos">
       <canvas id="graficodos" width="auto" height="auto"></canvas>
    </div>
    <div class="graficos">
       <canvas id="graficotres" width="auto" height="auto"></canvas>
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
            include '../../php/include/cargo.php';
            $cargo=cargo();
            echo "<h3>$cargo</h3>";

            if ($nombre = $_SESSION['Nombre']) {
                echo "<p>$nombre</p>";
            }
            ?>
        </div>

        <div class="perfil">
            <?php
            $nombre1 = $_SESSION['Nombre'];
            $result = $ared->query("SELECT * FROM empleados WHERE Nombre = '$nombre1'");
            while ($mostrar = mysqli_fetch_array($result)) {
            ?>
                <img src="<?php echo $mostrar['Fotografia']; ?>" alt="">
            <?php } ?>
        </div>
    </div>
    <div class="graficos">
        <p>graficos</p>
    </div>
    <div class="graficos">
        <p>graficos</p>
    </div>
    
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="/script/graficBarras.js"></script>
<script src="/script/graficRadar.js"></script>


