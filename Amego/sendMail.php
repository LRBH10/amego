<?php

require_once('./dist/phpmailer/class.phpmailer.php');

$mail = new PHPMailer();
$mail->IsHTML(true);
$mail->CharSet = "utf-8";
$mail->SetFrom('adresse-mail@gmail.com', 'Expéditeur');
$mail->Subject = "Signalement erreur PHP";
$mail->Body = '<p><b>E-Mail</b> au format <i>HTML</i>.</p>';
$mail->AddAddress('blaze_nastov@hotmail.com');
if(!$mail->Send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    exit;
}
echo 'Message has been sent';

?>
