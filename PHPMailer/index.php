<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Enviando e-mail com PHP</title>
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
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'jessica.persou@gmail.com';                     //SMTP username
    $mail->Password   = 'edkubhmzdcfiojae';                               //SMTP password
    $mail->SMTPSecure = false;  //PHPMailer::ENCRYPTION_SMTPS;     //Enable implicit TLS encryption
    $mail->Port       = 587;
    $mail->CharSet = 'UTF-8';                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

     //Attachments
     //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add somente o arquivo
     $mail->addAttachment('./file/euSou.zip', 'frase-do-dia.zip');  //add arquivo mais o nome

    //Recipients
    $mail->setFrom('jessica.persou@gmail.com', 'Testando');
    $mail->addAddress('jonatan.magrao92@gmail.com', 'Jonatan');     //Add a recipient
   // $mail->addAddress('adriano.fds@outlook.com', 'Adriano Siqueira');     //Add a recipient
   // $mail->addAddress('jeffrey.rodriigues@gmail.com', 'Jeffrey Rodrigues');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('adriano.fds@outlook.com'); // email como copia
    //$mail->addBCC('bcc@example.com'); 
    
    //content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Boa Noite Amigos!';
    $mail->Body = 'Estou aprendendo a enviar e-mail com <b>PHPMailer!</b><br>.'; //aqui pode ter tags html
    $mail->Body = 'Se você recebeu esse e-mail, é apenas um teste, fique tranquilo. é a Jessica S. e o anexo, é apenas uma mensagem positiva!!! \n';//nessa parte somente texto

    

    $mail->send();

    echo 'E-mail enviado com sucesso!';
} catch (Exception $e) {
    echo "ERRO: E-mail não enviado. Error PHPMailer: {$mail->ErrorInfo}"; //não colocar esse info pro usuario
    echo "ERRO: E-mail não enviado. Error PHPMailer";
}
    ?>

</body>
</html>
