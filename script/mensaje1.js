 function mensaje() {
     if (confirm("error! las contraseñas no conciden") == true) {
         window.location.href = '/usuarios/gerente/editar-perfil.php';
     } else {
         window.location.href = '/usuarios/gerente/editar-perfil.php';
     }
}
mensaje();
