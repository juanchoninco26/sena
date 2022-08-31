<?php
//https://www.youtube.com/watch?v=RSlE38lvlys
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../Enviar-correo-phpmailer/phpmailer/Exception.php';
require '../Enviar-correo-phpmailer/phpmailer/PHPMailer.php';
require '../Enviar-correo-phpmailer/phpmailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '';                     //correo administrador
    $mail->Password   = '';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //o ssl y en ese caso el port sería 465
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('', 'Juan'); //correo del administrador y su nombre 
    $mail->addAddress('');     //correo a quien se le envia 
    //$mail->addAddress('');               //Name is optional
    //$mail->addReplyTo('', 'Information');
    //$mail->addCC('');
    //$mail->addBCC('');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Prueba de envio';
    $mail->Body    = 'Hola, este es un correo de prueba';
    //$mail->AltBody ='This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'El mensaje se envió correctamente';
} catch (Exception $e) {
    echo 'Hubo un error al enviar el mensaje', $mail->ErrorInfo;
}
