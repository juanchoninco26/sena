    <div class="contenedor1">
        <!-- sitios actuales -->
        <div class="mincontenedor">
            <div class="sitios">
                <p>Sitos actuales</p>
                <a onclick="mostrar()"><img src="/imagenes/buscador.svg" alt="" id="buscar"></a>
            </div>
            <div id="buscador">
                <div class="centrar">
                    <input type="search" name="" id="search">
                    <a href=""><img src="/imagenes/buscador.svg" alt="" id="buscar1"></a>
                    <a onclick="ocultar()"><img src="/imagenes/arriba.svg" alt="" id="esconder"></a>
                </div>
                <script src="/script/mostrar.js"></script>
            </div>
            <div class="editar-sitios">
                <ol>
                    <!-- mostrar datos de la BD -->
                    <?php
                    $consult = "SELECT*FROM lugares_turisticos;";
                    $resutados = mysqli_query($ared, $consult);

                    while ($mostrar = mysqli_fetch_array($resutados)) { ?>

                        <li>
                            <p><?php echo $mostrar['Nombre']; ?></p><button><a onclick="return confirm('estas seguro de eliminar este dato?')"  href="/php/eliminar.php?Cod_lugar_turistico=<?php echo $mostrar['Cod_lugar_turistico']; ?>">x Quitar</a></button>
                        </li>
                    <?php } ?>
                </ol>
            </div>
        </div>
        <div class="contenedor2">
            <!-- editar paquetes -->
            <div class="paquetes">
                <div class="edpq">
                    <h3><a href="/php/vista/editar-paquete-turista.php">Editar Paquetes Turista</a></h3>
                </div>
                <div class="slider">
                    <div class="t-paquetes">
                        <!-- tipos de paquetes -->
                        <?php
                        $consult = 'SELECT*FROM paquetes_turisticos;';
                        $result = mysqli_query($ared, $consult);

                        while ($ver = mysqli_fetch_array($result)) { ?>
                            <div class="sub-t-paquete">
                                <p>&nbsp<?php echo $ver['Id_turista']; ?>&nbsp</p>
                            </div>

                        <?php } ?>
                    </div>
                </div>
                <form class="formulario1" action="/php/guardar_dat.php" method="post">
                    <p>C.C Turista <input type="text" name="turista"></p>
                    <p>Nombre: <input type="text" name="nombre" placeholder=""></p>
                    <p>Rutas: <input type="text" name="rutas"></p>
                    <p>Precio: <input type="text" name="precio"></p>
                    <p>Punto paquete: <input type="text" name="puntos"></p>
                    <p>Descripción: <textarea name="descripcion" id="" cols="20" rows="1"></textarea></p>
                    <input type="submit" value="guardar" name="paquetes">
                </form>
            </div>
        </div>
    </div>

    <div class="contenedortres">
        <!-- administrador -->
        <div class="subcaja2">
            <div class="cja">
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
        <div class="agr-sitios">
            <div class="txt-sitio">
                <h3>Agregar Sitios</h3>
            </div>
            <div class="form-1">
                <form class="formulario" action="/php/guardar_dat.php" method="POST">
                    <p>Nombre</p>
                    <input type="text" name="nombre">
                    <p>Descripcion corta</p>
                    <input type="text" name="desc-corta">
                    <p>Descripcion larga</p>
                    <textarea name="desc-larga" rows="3" cols="30"></textarea>
                    <div class="formulario2">
                        <p>Punto lugar</p>
                        <input type="number" name="Punto_lugar" id="" class="archivo1">
                        <p>Precio</p>
                        <input type="number" name="precio" id="">
                        <p>Ubicacion</p>
                        <input type="location" name="ubicacion" id="">
                    </div>
                    <input type="submit" name="editar-sitios" value="guardar">
                </form>
            </div>
        </div>
    </div>