<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Testando Composer</title>
</head>
<body>
    <?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './lib/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.mailtrap.io';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '16c48253cfc82c';                     //SMTP username
    $mail->Password   = '40e14a8c21f163';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 2525;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    
    //Recipients
    $mail->setFrom('testecapitalconsig@gmail.com', 'atendimento');
    $mail->addAddress('jessica.persou@gmail.com', 'Jessica Sousa');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com'); 
    
    //content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Titulo do E-mail';
    $mail->Body    = 'Aprendendo a enviar e-mail com <b>PHP!</b><br>.'; //aqui pode ter tags html
    $mail->AltBody = 'Aprendendo a enviar e-mail com PHP. \nSegunda Linha!';//nessa parte somente texto

    $mail->send();

    echo 'E-mail enviado com sucesso!';
} catch (Exception $e) {
    echo "ERRO: E-mail não enviado. Error PHPMailer: {$mail->ErrorInfo}"; //não colocar esse info pro usuario
    echo "ERRO: E-mail não enviado. Error PHPMailer;
}
    ?>

</body>
</html>