<?php
include("class.phpmailer.php"); 
include("class.smtp.php"); 
$mail = new PHPMailer(); 
$mail->IsSMTP(); 
$mail->SMTPAuth = true; 
$mail->SMTPSecure = "ssl"; 
$mail->Host = "smtp.gmail.com"; 
$mail->Port = 465; 
$mail->Username = "andreshernandezlara@gmail.com"; 
$mail->Password = "Armagar12";

$mail->From = "rwejio@gmail.com"; 
$mail->FromName = "Andres Hernandez Lara"; 
$mail->Subject = "Asunto del Email"; 
$mail->AltBody = "Este es un mensaje de prueba."; 
$mail->MsgHTML("<b>Este es un mensaje de prueba</b>."); 
/*$mail->AddAttachment("files/files.zip"; 
$mail->AddAttachment("files/img03.jpg" ;*/
$mail->AddAddress("rwejio@gmail.com", "Destinatario"); 
$mail->IsHTML(true); 
if(!$mail->Send())
{ 
	 echo "Error: " . $mail->ErrorInfo; 
}else{ 
	echo "Mensaje enviado correctamente"; 
}

?>