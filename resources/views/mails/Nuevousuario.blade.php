<?php 

/*
mail es el correo del centro
email es el correo del alumno

*/

error_reporting(0); 
$email = $_POST['email']; 
$contraseña= $_POST['contraseña']; 
$mail="noreply@fptxurdinaga.net";


$header = 'From: ' . $mail ; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje .= "Hemos dado de alta a su usuario";
$mensaje .= "Usuario: " . $email . " \r\n"; 
$mensaje .= "Crontraseña: " . $contraseña . " \r\n"; 



$asunto = 'Alta nuevo usuario'; 

mail($email, $asunto, utf8_decode($mensaje), $header); 

echo 'Se ha creado el usuario correctamente'; 

?> 