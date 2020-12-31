<?php 	

	$destinatario = 'jalvarez@dieselomt.cl';
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$empresa = $_POST['empresa'];
	$numero = $_POST['numero'];
	$correo = $_POST['correo'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];

	//ENVIO DE FORMULARIO POR CORREO
	$header = 'From:'.$correo . "\r\n" . "Reply-To:$correo\r\n" . "Return-Path:$destinatario";
	$cuerpoMensaje = $mensaje . "\n" . "\nAtentamente : " . " " . "$nombre" . " " . "$apellido" . " " . "\nEmpresa u organizacion: " . " " . $empresa . "\nNumero de contacto: " . " " . "+".$telefono . " ";

	mail($destinatario , $asunto, $cuerpoMensaje, $header);


 ?>