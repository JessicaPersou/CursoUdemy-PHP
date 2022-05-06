<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function enviarMail($pessoa, $assunto, $msgHTML){

require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$mail->isSMTP();  
$mail->SMTPDebug = 0;                                                             //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->Port       = 587;
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'jessica.persou@gmail.com';                     //SMTP username
$mail->Password   = 'edkubhmzdcfiojae';                               //SMTP password
$mail->SMTPSecure = false;  
$mail->isHTML(true);   
$mail->CharSet = 'UTF-8';                                    

//Attachments
//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add somente o arquivo
// $mail->addAttachment('./file/euSou.zip', 'frase-do-dia.zip');  //add arquivo mais o nome

//Recipients
$mail->setFrom('jessica.persou@gmail.com', 'Testando');
$mail->addAddress($pessoa, 'Jessica Sousa');     //Add a recipient
// $mail->addAddress('adriano.fds@outlook.com', 'Adriano Siqueira');     //Add a recipient
// $mail->addAddress('jeffrey.rodriigues@gmail.com', 'Jeffrey Rodrigues');     //Add a recipient

//content

$mail->Subject = $assunto;
$mail->Body = $msgHTML;

if($mail->send()){
    echo "E-mail enviado com sucesso!";
    return true;
} else {
    echo "ERRO: E-mail não enviado. Error PHPMailer: {$mail->ErrorInfo}"; //não colocar esse info pro usuario
    return false;
}}
?>