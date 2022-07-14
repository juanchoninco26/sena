<?php
require '../PHPMailer/PHPMailerAutoload.php';

$mail = new correo ();

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;

$mail->Username = '@gmail.com'; //Correo de donde enviaremos los correos
$mail->Password = 'password'; // Password de la cuenta de envío

$mail->setFrom('@gmail.com', 'RUTA360 GIGANTE HUILA');
$mail->addAddress( '@gmail.com', 'Receptor'); //Correo receptor


$mail->Subject = 'Ruta360 Gigante ha hecho una nueva publicación';
$mail->Body    = '<b>Ingresa al sistema y descubre las novedades que Ruta360 tiene para ti</b>';
$mail->IsHTML(true);

if($mail->send()) {
    echo 'Correo Enviado';
    } else {
    echo 'Error al enviar correo';
}
?>

