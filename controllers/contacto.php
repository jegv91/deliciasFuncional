<?php
	include_once('../models/connection.php');
	
	$nombre = strip_tags($_POST['nombre']);
	$correo = strip_tags($_POST['correo']);
	$mensaje = strip_tags($_POST['mensaje']);
	
	$fecha = time();
	$fechaFormateada = date("j/n/Y", $fecha);
	
	$textoEmisor = "MIME-VERSION: 1.0\r\n";
	$textoEmisor .= "Content-type: text/html; charset=UTF-8\r\n";
	$textoEmisor .= "From: Delicias";
	
	//Correo de destino; donde se enviará el correo.
	$correoDestino = "delicias_eldorado@hotmail.com";
	
	//Formateo el asunto del correo
	$asunto = "Delicias Comentario enviado por $nombre ";
	 
	//Formateo el cuerpo del correo
	$cuerpo = "<b>Enviado por:</b> " . $nombre . "<br />";
	$cuerpo .= "<b>E-mail:</b> " . $correo . "<br />";
	$cuerpo .= "<b>Comentario:</b> " . $mensaje;
	
	// Envío el mensaje
	mail( $correoDestino, $asunto, $cuerpo, $textoEmisor);
	
	/*
	if(!isset(send))
	$nombre = $_POST['nombre'];
	$mail = $_POST['correo'];
	$header = 'From: ' .$mail. "\r\n";
	$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
	$header .= "Mime-Version: 1.0 \r\n";
	$header .= "Content-Type: text/plain";
	$mensaje = "Este mensaje fue enviado por " . $nombre . "\r\n";
	$mensaje .= "Su e-mail es: " . $mail . " \r\n";
	$mensaje .= "Mensaje: " . $_POST['mensaje'] . "\r\n";
	$mensaje .= "Enviado el " . date('d/m/Y', time());
	$para = 'delicias_eldorado@hotmail.com';
	$asunto = 'Comentario o sugerencia pagina Delicias';
	mail($para, $asunto, utf8_decode($mensaje), $header);
	echo '&estatus = ok&';*/
?>