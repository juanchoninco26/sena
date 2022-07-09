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

            $consulta1 = "SELECT * FROM empleados";
            $resultados1 = mysqli_query($ared, $consulta1);
            $filasb = mysqli_fetch_array($resultados1);

            $a = $_SESSION['Nombre'];
            if ($filasb['Id_cargo'] == $a) {
                echo "<h3>Administrador</h3>";
            } elseif ($filasb['Id_cargo'] == $a) {
                echo "<h3>Aaa</h3>";
            }
            //ver video:https://www.youtube.com/watch?v=9BLoMGO-XcU
            //el video muestra quien inicia el software
            //session_start() esta en el: php/loguin
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
    <div class="reservas">
        <div class="subreservas">
            <div>
                <h3>reservas pendientes</h3>
            </div>
            <form action="/php/guardar_dat.php" method="POST">
                <?php

                $consult = "SELECT * FROM reservas";
                $resultados = mysqli_query($ared, $consult);


                while ($mostrar = mysqli_fetch_array($resultados)) {;
                    //$_SESSION['reservas']=$mostrar['id_reservas'];
                ?>
                    <div id="buscador">
                        <input type="date" name="reprogramar" id=""><button onclick="ocultar()">enviar</button>
                        <br>
                        <input type="hidden" name="reserva" value="<?php echo $mostrar['id_reservas']; ?>">
                        <br>
                    </div>
            </form>
            <ol>
                <form action="/php/guardar_dat.php" method="POST" class="form">

                    <li>
                        <p class="tx"><?php $_SESSION['reservas'] = $mostrar['id_reservas'];
                                        echo $mostrar['id_reservas']; ?></p><a href="/php/confirmar.php?confirmar=<?php echo $mostrar['confirmar']; ?>">Confirmar</a><a onclick="mostrar()">Reprogramar</a>
                    </li>
                </form>
            </ol>
        <?php } ?>
        </div>
    </div>
    <div class="informacion">
        <div class="letras">
            <h3> Informacion</h3>
        </div>
        <div class="subinformacion">
            <!--AQUI CODIGO PHP-->
            <?php ?>
            <div class="cajita">
                <p>ruta del cafe</p>
            </div>
            <div class="letras">
                <p><b>Nombre:</b>Michael Garcia</p>
                <p><b>N. Identificacion:</b>10032014</p>
                <p><b>N. Telefono:</b></p>
                <p><b>Fecha:</b>24/05/2021</p>
            </div>
            <?php ?>
        </div>
    </div>
</div>
<script src="/script/mostrar.js"></script>