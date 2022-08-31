<?php 
//https://programacion.net/articulo/carrito_de_la_compra_simple_en_php_utilizando_sesiones_1723
//https://www.youtube.com/watch?v=dcdtvaZDpOI
session_start();
//carrito
//se recibe del formulario los datos del carrito
if(isset($_SESSION['carrito']) || isset($_POST['nombre'])){
    if(isset($_POST['nombre'])){
        $carrito_compras=$_SESSION['carrito'];
        if($_POST['nombre']){
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $cantidad = $_POST['cantidad'];
            $num = -1;
            if($num != -1){
                //agregramos en un array los datos enviados
                $cuanto=$carrito_compras[$num]['cantidad']+$cantidad;
                $carrito_compras[$num]= array("nombre"=>$nombre, "precio"=>$precio, "cantidad"=>$cantidad);
            }else {
                $carrito_compras[] = array("nombre"=>$nombre, "precio"=>$precio, "cantidad"=>$cantidad);
            }
        } else {
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $cantidad = $_POST['cantidad'];
            $carrito_compras[] = array("nombre"=>$nombre, "precio"=>$precio, "cantidad"=>$cantidad);
        }
        
    }
    
    $_SESSION['carrito']=$carrito_compras;
    if(isset($_POST['agregar1'])){
        header("Location:../PaginaPrincipal/Sitios2.php");
    }
    if(isset($_POST['agregar2'])){
        header("Location:../PaginaPrincipal/Sitios3.php");
    }
    
}

if (isset($_POST['limpiar'])) {
    session_unset();
    session_destroy();
    header("Location:../PaginaPrincipal/Carrito.php");
}
?>