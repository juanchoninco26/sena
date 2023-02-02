<?php 
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