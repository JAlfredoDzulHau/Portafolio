<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
  $telefono = $_POST['telefono'];
  $mensaje = $_POST['mensaje'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'itescam.edu.mx@gmail.com'; // Dirección de Gmail que desea utilizar como servidor SMTP
    $mail->Password = 'alfredo10'; //  Contraseña
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('itescam.edu.mx@gmail.com'); // Dirección de Gmail que usó como servidor SMTP
    $mail->addAddress('itescam.edu.mx@gmail.com'); // Dirección de correo electrónico donde desea recibir correos electrónicos (puede usar cualquiera de sus direcciones de gmail, incluida la dirección de gmail que usó como servidor SMTP)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Nombre : $nombre <br>Apellido: $apellido <br>Email: $email <br>Teléfono: $telefono <br>Mensaje : $mensaje</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>