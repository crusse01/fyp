<?php
$to = "victimemaildemo@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: iterationphishingdemo@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>