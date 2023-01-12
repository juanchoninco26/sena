<div class="sec2">
    <div class="otros-user">
        <div class="titulo">
            <h2>Otros Usuarios</h2>
            <a onclick="mostrar()"><img src="/imagenes/buscador.svg" alt="" id="buscar"></a>
        </div>
        <div id="buscador">
            <div class="centrar">
                <form action="" method="">
                    <input type="search" name="buscarUsuario" id="search">
                    <a href=""><img src="/imagenes/buscador.svg" alt="" id="buscar1"></a>
                    <a onclick="ocultar()"><img src="/imagenes/arriba.svg" alt="" id="esconder"></a>
                </form>
            </div>
        </div>
        <?php
        // $crear_usuario = "";
        // if (isset($_GET['crear_usuario'])) {
        //     $busqueda = $_GET['crear_usuario'];
        //     $crear_usuario = "WHERE Nombre LIKE'%" . $busqueda . "%'";
        // }
        ?>
        <div class="lista">
            <ol>
                <?php
                // $consult = " SELECT Nombre,Id_empleado FROM empleados $crear_usuario ORDER BY Nombre ASC";
                // $resutados = mysqli_query($ared, $consult);

                // while ($mostrar = mysqli_fetch_array($resutados)) { 
                ?>

                <form action="/php/elim_usuario.php" method="GET">
                    <li id="datos">
                        <!-- <p><?php //echo $mostrar['Nombre'];
                                ?></p><button><a onclick="return confirm('estas seguro de eliminar este dato?') " href="/php/eliminar.php?Id_empleado=<?php //echo $mostrar['Id_empleado']; 
                                                                                                                                                        ?>">x Quitar</a></button> -->
                    </li>
                    <?php //} 
                    ?>
                </form>
            </ol>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                viewData()
                //consultamos los datos al servidor local 
                const buscarDatos = async (url) => {
                    const response = await fetch(url);
                    const rta = await response.json();
                    // console.log(rta);
                    return rta
                }

                //mostrar datos 
                buscarDatos(`../../php/listas_api.php`)
                    .then((data) => {
                        //pasamos la respueta a la funcion  viewData(data)
                        console.log(data)
                        viewData(data)
                    })
                    .catch(error => console.error('2  error:', error))
            });

            function viewData(data) {

                const busqueda = document.querySelector('#search'); //buscador
                let criteriosBusqueda = '';

                if (busqueda) {
                    busqueda.addEventListener('input', event => {
                        criteriosBusqueda = event.target.value.toUpperCase(); //captura el valor ingresado
                        return criteriosBusqueda
                    })
                    filterItems()
                }
                //filtro de datos
                function filterItems(data_r, teclado) {
                    return data_r.filter((e) => e.toString().toLowerCase().includes(teclado.toLowerCase()));
                }

                //le pasamos el dato retornado y lo ingresado por el teclado para ver por consola
                console.log(filterItems(data,"admin"));

                //recorrer los datos para mostrarlos 
                let template = ``;
                data.forEach(Element => {
                    const nombre = Element.Nombre;
                    const id = Element.Id_empleado;
                    template += `<ul id='resultado'>${nombre}<button><a onclick="return confirm('estas seguro de eliminar este dato?') " href="/php/eliminar.php?Id_empleado=${id}">x Quitar</a></button></ul>`;
                })
                //funciona, hay que arreglar la parte visual
                //https://www.youtube.com/watch?v=6zii2I6LlT0 minuto:57:40
                document.getElementById("datos").innerHTML = template;
            }
        </script>
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
            include '../../php/include/cargo.php';
            $cargo = cargo();
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
    <br>
    <div class="agre-user">
        <div class="titulo">
            <p>Agregar Usuario</p>
        </div>
        <?php
        $result = mysqli_query($ared, "SELECT Id_cargo,Nombre_cargo FROM cargo");
        ?>
        <form class="add-user" action="/php/guardar_dat.php" method="POST" enctype="multipart/form-data">
            <p>Nombre</p>
            <input type="text" name="nombre">
            <p>Contraseña</p>
            <input type="password" name="contraseña">
            <p>Fecha de nacumiento</p>
            <input type="date" name="edad">
            <p>telefono</p>
            <input type="text" name="telefono">
            <p>Cargo</p>
            <select name="cargo">
                <?php
                while ($fila = $result->fetch_assoc()) :
                    $id = $fila['Id_cargo'];
                    $nombre = $fila['Nombre_cargo'];
                    echo "<option value=$id>$nombre</option>";
                endwhile;
                ?>
            </select>
            <p>Fotografria</p>
            <input type="file" name="foto" id="seleccionArchivos">
            <br>
            <img id="imagenPrevisualizacion">
            <br>
            <div>
                <input type="submit" value="guardar" name="crear_usuario" onclick="guardarUsuario()">
            </div>
        </form>
        <!-- script para mostrar las imagenes-->
        <script src="/script/mostrar.js"></script>

    </div>
</div>