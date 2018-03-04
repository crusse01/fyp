<?php

require_once('PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp@gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'phishingemaildemo@gmail.com';
$mail->Password = 'phishingfordata';
$mail->SetFrom('phishingemaildemo@gmail.com');
$mail->Subject = 'I need to verify your password';
$mail->Body = 'Please give me your password';
$mail->AddAddress('victimemaildemo@gmail.com');

$mail->send();

?>