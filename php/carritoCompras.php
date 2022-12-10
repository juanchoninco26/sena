<?php 
session_start();
//https://programacion.net/articulo/carrito_de_la_compra_simple_en_php_utilizando_sesiones_1723
//https://www.youtube.com/watch?v=dcdtvaZDpOI
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
        header("Location:../../PaginaPrincipal/Sitios2.php");
    }
    if(isset($_POST['agregar2'])){
        header("Location:../../PaginaPrincipal/Sitios3.php");
    }
    if(isset($_POST['agregar3'])){
        header("Location:/../../PaginaPrincipal/login/login.php");
    }
}

if (isset($_GET['eliminar_car'])) {
    $total = 0;
    $carrito_compras = $_SESSION['carrito'];
    for ($i = 0; $i <= count($carrito_compras) - 1; $i--) {
        if (isset($carrito_compras[$i])) {
            if ($carrito_compras[$i] != NULL) {
                $totals = $carrito_compras[$i]['precio'];
                $total = $total + ($totals * $carrito_compras[$i]['cantidad']);
            }
        }
    }
}

if (isset($_POST['limpiar'])) {
    session_unset($_SESSION['carrito']);
    session_destroy($_SESSION['carrito']);
    unset($_SESSION['total_carrito']);
    header("Location:../PaginaPrincipal/Carrito.php");
}
?>

