function mensaje() {
    if (confirm("error! las contraseñas no conciden") == true) {
    window.location.href='/PaginaPrincipal/login/editar-perfil.php';
   } else {
    window.location.href='/PaginaPrincipal/login/editar-perfil.php';
   }
  }
  mensaje();