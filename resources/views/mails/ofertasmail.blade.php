<?php 

/*
mail es el correo del centro
email es el correo del alumno

*/

error_reporting(0); 
$email = $_POST['email']; //email Usuario
$mail="noreply@fptxurdinaga.net";


$header = 'From: ' . $mail ; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje .= "Se ha inscrito en la oferta";

/* Meter el contenido de la oferta*/



$asunto = 'Oferta de trabajo'; 

mail($email, $asunto, utf8_decode($mensaje), $header); 









error_reporting(0); 
$emailempresa = $_POST['email']; //email de la empresa
$mail="noreply@fptxurdinaga.net";


$header = 'From: ' . $mail ; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje .= $usuario . "se ha inscrito a la oferta de trabajo publicada en el centro FP Txurdinaga";
$mensaje .= $CV .
/* Meter el contenido */



$asunto = 'Oferta de trabajo' . $oferta; 

mail($emailempresa, $asunto, utf8_decode($mensaje), $header); 








echo 'Se a inscrito en la oferta'; 

?> 