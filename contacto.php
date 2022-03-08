<?php 
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

echo $mensaje;

if(mail('sheen1386@gmail.com', "Tattoo Studios: ". $asunto, $nombre. " ha dicho: ". $mensaje. ". Responder al Siguiente correo: ". $correo)){
	echo " Correo Enviado";
}else{
	echo "Error";
}
?>