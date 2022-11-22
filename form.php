<?php

$nombre = $_POST ['name'];
$mail = $_POST ['email'];
$message = $_POST ['message'];

$message = "Este mensaje fue enviado por " + $nombre + ",\r\n";
$message += "Su e-mail es: " + $mail + ",\r\n";
$message += "Mensaje: " + $_POST['mensaje'] + ",\r\n";
$message += "Enviado el " + date('d/m/Y', time());

$destinatario = 'joa_carre21@hotmail.com';
$asunto = 'Este mail fue enviado desde la web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header('Location:exito.html')
?>