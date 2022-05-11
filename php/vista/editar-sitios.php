<div class="contenedor1">
        <!-- sitios actuales -->
        <div class="mincontenedor">
                <div class="sitios">
                    <p>Sitos actuales</p>
                    <img src="/imagenes/buscador.svg" alt="">
                </div>
            <div class="editar-sitios">
              <ol>
                  <!-- mostrar datos de la BD -->
              <?php 
                    $consult ="SELECT*FROM lugares_turisticos;"; 
                    $resutados = mysqli_query($ared, $consult);

                    while ($mostrar = mysqli_fetch_array($resutados)) {?>
                
                
                    <li><p><?php echo $mostrar['Nombre'];?></p><button><a onclick="return confirm('estas seguro de eliminar este dato?')" href="/php/eliminar.php?Cod_lugar_turistico=<?php echo $mostrar ['Cod_lugar_turistico'];?>">x Quitar</a></button></li>
                 <?php } ?>
                 
              </ol>
            </div>
        </div>
        <div class="contenedor2">
            <!-- editar paquetes -->
            <div class="paquetes">
                <div class="edpq">
                    <h3>Editar Paquetes</h3>
                </div>
                <div>
                    <!-- tipos de paquetes -->
                </div>
                <form class="formulario1" action="/php/guardar_dat.php" method="post">
                    <p>Nombre: <input type="text" placeholder=""></p> 
                    <p>Rutas:  <input type="text">
                    <p>Precio: <input type="text"></p> 
                    <p>Descripción: <textarea name="" id="" cols="20" rows="1"></textarea></p>
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
            
                if($nombre=$_SESSION['Nombre']){
                    echo "<p>$nombre</p>";
                    } 
                ?>
             </div>
            <div class="perfil">
                <img src="/imagenes/user.svg" alt="">
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
                <textarea name="desc-larga" rows="3" cols="30" ></textarea>
                <div class="formulario2" >
                    <p>Punto lugar</p>
                    <input type="number" name="Punto_lugar" id="" class="archivo1">
                    <p>Precio</p>
                    <input type="number" name="precio" id="">
                    <p>Ubicacion</p>
                    <input type="location" name="ubicacion" id="">
                </div>
            <input type="submit" name="editar-sitios"value="guardar">
            </form>
           </div>
        </div>
    </div>