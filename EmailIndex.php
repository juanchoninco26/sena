<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
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
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
    include './php/puntos-turista-bd.php';
    $consult = "SELECT correo FROM correo WHERE activo=1";
    $correo = mysqli_query($ared, $consult);  
    

    //Recipients
    $mail->setFrom('vanessatrujillomarin56789@gmail.com', 'ARED');
    $mail->addAddress= $correo;     //Add a recipient
     
    //Attachments
    $mail->addAttachment('imagenes/imgemail.png');  //Add attachment
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Nueva publicacion';
    $mail->Body    = '<h1>Te invitamos a conocer el nuevo lugar que traemos para ti<h1> style';
    $mail->send();
    echo 'Enviado correctamente';
} catch (Exception $e) {
    echo "Error al enviar {$mail->ErrorInfo}";
}