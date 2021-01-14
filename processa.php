<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";

$conexao = new mysqli($servername, $username, $password, $dbname);


$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.sendgrid.net';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'apikey';                     // SMTP username
    $mail->Password   = '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';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('ti@unidentis.com.br', 'Plano Empresa');
    $mail->addAddress('comercial@unidentis.com.br ', 'Joe User');     // Add a recipient
             // Name is optional
  

 
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Plano Empresa';
    $mail->Body    = 'Nome:'.$nome.'Telefone:'.$telefone;
   

    $mail->send();
    header('Location: solicitado.html');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
