<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta content="initial-scale=1, shrink-to-fit=no, width=device-width" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="icon" type="image/png" href="imgs/logo-mywebsite-urian-viera.svg">
    <link rel="stylesheet" type="text/css" href="css/material.min.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <title>Enviar correos</title>
</head>
<body>

<nav class="navbar navbar-light" style="background-color: #2d6e2f !important;">
  <a class="navbar-brand" href="#">
   <strong style="color: #fff">ARED</strong>
  </a>
</nav>

<div class="container mt-5"> 
<?php
header('Content-Type: text/html; charset=UTF-8'); 
include('puntos-turista-bd.php');
if (isset($_REQUEST['enviarform'])) 
    if (is_array($_REQUEST['correo'])) {
        $num_countries = count($_REQUEST['correo']);
        $columna   = 1;
?>
       
<?php ?>
<?php 
foreach ($_REQUEST['correo'] as $key => $emailCliente) {

$destinatario = trim($emailCliente); //Quitamos algun espacion en blanco
$asunto       = "Bienvenido a ARED";
$cuerpo =""; ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
    <title>Envio de email de forma masiva</title>';
<?php 
$cuerpo .= "";?>

<style>
*  {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family:'roboto', sans-serif;
    font-size: 16px;
    font-weight: 300;
    color: #888;
    background-color: rgba(230, 225, 225, 0.5);
    line-height: 30px;
    text-align: center;
}

.contenedor {
    width: 80%;
    min-height: auto;
    text-align: center;
    margin: 0 auto;
    background: #ececec;
    border-top: 3px solid #c8c3c7;
    color: #fff;
}

.btnlink {
    padding: 15px 30px;
    text-align: center;
    background: #ececec;
    color: crimson !important;
    font-weight: 600;
    text-decoration: blue;
}

.btnlink:hover {
    color: #fff !important;
}

.imgBanner {
    width: 100%;
    margin-left:auto;
    margin-right: auto;
    padding: 0px;
}

.misection {
    color: #34495e;
    margin: 4% 10% 2%;
    text-align: center;
    font-family: sans-serif;
}

.mt-5 {
    margin-top: 50px;
}

.mb-5 {
    margin-bottom: 50px;
}
</style>; 
<?php 
$cuerpo .=""; ?>
</head>
<body>
    <div class="contenedor">
     <div class="caja" style="background: #2d6e2f;">
       <h1>ARED Y RUTA 360 GIGANTE</h1> 
       </div>
     </div> 
    <table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
    <tr>
        <td style="padding: 0">
            <img style="padding: 0; display: block" src="/Como-enviar-Email-Correos-de-forma-Masiva-a-multiples-Usuarios-con-PHP-facil-master/imgs//banner1.png" width="100%">
        <div class="mb-5 misection">  
          <p>&nbsp;</p>
            <a href="/PaginaPrincipal/Promo.php" class="btnlink">Visitar</a>
        </div>
        </td>
    </tr>

    <tr>
        <td style="background-color: #ffffff;">
            <div class="misection">
                <h2 style="color: red; margin: 0 0 7px">Hola,</h2>
                <p style="margin: 2px; font-size: 18px">te doy la bienvenida a ARED, un software de turismo que te brinda comodidad, ahora de la mano de la agencia ruta360 Gigante</p>
            </div>
        </td>
    </tr>
    <tr>
        <td style="background-color: #ffffff;">
        <div class="misection">
            <h2 style="color: red; margin: 0 0 7px">Visita el canal de youtube de Ruta360 Gigante y mira un poco de lo que te ofrecemos</h2>
            <img style="padding: 0; display: block" src="/Como-enviar-Email-Correos-de-forma-Masiva-a-multiples-Usuarios-con-PHP-facil-master/imgs/imgsub.png" width="100%">
        </div>
        
        <div class="mb-5 misection">  
          <p>&nbsp;</p>
            <a href="https://www.youtube.com/@ruta360gigante4" class="btnlink">Visitar Canal </a>
        </div>

        </td>
    </tr>
</table>; 
<?php 
$cuerpo. 
      '</div>
      </body>
    </html>';

    $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';           //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'vanessatrujillomarin56789@gmail.com';                     //SMTP username
    $mail->Password   = 'ppqsnnatgalbvkam';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;  
    
}
  
    if (mail($destinatario,$asunto,$cuerpo,$mail)){
        $UpdateEmail = ("UPDATE correo  SET activo='1'  WHERE correo='".$emailCliente."' ");
        $resultEmail = mysqli_query($ared, $UpdateEmail);
    } 

        echo '<div>'. $columna. "). " .$emailCliente.'</div>';
        $columna ++;
        }
     }
   
?>

    <div class="row text-center mt-5 mb-5">
        <div class="col-12">
            <a href="index.php" class="btn btn-round btn-primary" style="background: gray;">Volver al Inicio</a>
        </div>
    </div>
</div>
</body>
</html>