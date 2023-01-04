<?php

//muestra los cargos que hay en la BD
function cargo(){
    include '../../php/puntos-turista-bd.php';

    //se redireccionara al susario segun su cargo 
    $nombre1 = $_SESSION['Nombre'];
    $consulta = "SELECT *FROM empleados where Nombre='$nombre1'";
    $cons = mysqli_query($ared, $consulta);
    $rows = mysqli_fetch_array($cons);
    if ($rows['Id_cargo'] == 1) {
        echo "Gerente";
    }
    if ($rows['Id_cargo'] == 2) {
        echo "Asesor";
    }
    if ($rows['Id_cargo'] == 3) {
        echo "Contador";
    }
}

function linkPorCargo(){
    include '../php/puntos-turista-bd.php';

    $nombre1= $_SESSION['Nombre'];
    $consulta="SELECT Nombre,Id_cargo FROM empleados WHERE Nombre='$nombre1'";
    $resultado= mysqli_query($ared,$consulta) or die(mysqli_error($ared));
    $row=mysqli_fetch_array($resultado);

    //se redireccionara al susario segun su cargo 
    if ($row['Id_cargo'] == 1) {
        header('Location:/usuarios/gerente/editar-perfil.php');
    }
    if ($row['Id_cargo'] == 2) {
        header('Location:/usuarios/asesor/editar-perfil.php');
    }
    if ($row['Id_cargo'] == 3) {
        header('Location:/usuarios/contador/editar-perfil.php');
    }
}

function mensaje(){
    //sesiones de login2.php
    //mensaje: login administradores 
    $A =isset($_SESSION['mensaje'])==1 ? 'Usuario o Contraseña Incorrecta':'';
    echo $A;

    //cerrar el mensaje al recargar
    session_destroy();

}

function mensajeUno(){
    //sesiones de login2.php
    //mensaje 1:login usuarios
    $B =isset($_SESSION['mensajeUno'])==1 ? 'Usuario o Contraseña Incorrecta':'';
    echo $B;

    //cerrar el mensaje al recargar
    session_destroy();
}

function mensajeRegistro(){
    //mensaje4 is guardar_dat.php
    if (isset($_SESSION['mensaje4']) == 1) {
        echo 'Usuario registrado';
    } elseif (isset($_SESSION['mensaje4'])) {
        echo 'Error en el registro';
    } else {
        echo '';
    }
    session_destroy();
}
?>