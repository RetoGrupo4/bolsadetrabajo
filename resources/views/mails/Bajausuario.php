<?php

/*
mail es el correo del centro
email es el correo del alumno

*/





error_reporting(0); 
$email = "asaiz.90@gmail.com"; 
$mail="bolsatrabajotxurdi@gmail.com";



$header = 'From: ' . $mail ; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje .= "Su cuenta ha sido dada de baja";




$asunto = 'Baja usuario'; 

mail($email, $asunto, utf8_decode($mensaje), $header); 

echo 'Su cuenta ha sido dado de baja'; 

?>