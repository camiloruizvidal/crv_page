<?php
require_once "recaptchalib.php";
$secret = "6LfrPB8UAAAAADup1DW9hFJ9tD-ZTi113CXmQljN";
$response = null;
$reCaptcha = new ReCaptcha($secret);
if ($_POST["g-recaptcha-response"]) 
{
	$response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"],$_POST["g-recaptcha-response"]);
}
if($_POST && $response->success)
{
	echo(json_encode(array('valido'=>true),JSON_PRETTY_PRINT));
	extract($_POST);
	$para      = 'info@solucionescrv.com';
	$titulo    = 'Información de contacto WebSite';
	$cabeceras = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$cabeceras .= 'From: concat_client@solucionescrv.com' . "\r\n" .'X-Mailer: PHP/' . phpversion();
	$mensaje   = 'De: '.$nombre
				.', Telefono: '.$TelefonoRemitente
				.'<br/>Responder al email:"'
				.$email
				.'"<h1>Mensaje</h1>'
				.$mensajeRemitente;
	mail($para, $titulo, $mensaje, $cabeceras);
}
else
{
	echo(json_encode(array('valido'=>false),JSON_PRETTY_PRINT));
}
?>