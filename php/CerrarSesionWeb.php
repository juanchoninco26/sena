<?php 
        session_start();
        $_SESSION=[];
        session_unset();
        session_destroy();
        header('Location:/user-externo/loguin.php');
?>