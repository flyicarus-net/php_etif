<?php 


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
   $errores = '';
	$enviado = '';
	
	if (isset($_GET['submit'])) {
		$nombre = $_GET['nombre'];
		$correo = $_GET['correo'];
		$telefono = $_GET['telefono'];
		$mensaje = $_GET['mensaje'];
	
		if (!empty($nombre)) {
			$nombre = trim($nombre);
			$nombre = htmlspecialchars($nombre);
			// $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
		} else {
			$errores .= 'Por favor escribe un nombre <br />';
		}
	
		if (!empty($correo)) {
			$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
	
			if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
				$errores .= 'Por favor escribe un correo valido <br />';
			}
		} else {
			$errores .= 'Por favor escribe un correo <br />';
		}
	
		if(!empty($mensaje)){
			$mensaje = htmlspecialchars($mensaje);
			$mensaje = trim($mensaje);
			$mensaje = stripslashes($mensaje);
		} else {
			$errores .= 'Por favor escribe el mensaje <br />';
		}
	
		if(!$errores){
			//Si no hay errores envia un correo
			//En localhost y xampp es necesaria una configuración adicional
			$enviar_a = 'tunombre@tuempresa.com';
			$asunto = 'Correo enviado desde miPagina.com';
			$mensaje_preparado = "De: $nombre \n";
			$mensaje_preparado .= "Correo: $correo \n";
			$mensaje_preparado .= "Telefono: $telefono \n";
			$mensaje_preparado .= "Mensaje:  . $mensaje";
	
			//mail($enviar_a, $asunto, $mensaje_preparado);
			$enviado = 'true';
		}
}

} else {
	$errores = '';
	$enviado = '';
	
	if (isset($_POST['submit'])) {
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		$telefono = $_POST['telefono'];
		$mensaje = $_POST['mensaje'];
	
		if (!empty($nombre)) {
			$nombre = trim($nombre);
			$nombre = htmlspecialchars($nombre);
			// $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
		} else {
			$errores .= 'Por favor escribe un nombre <br />';
		}
	
		if (!empty($correo)) {
			$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
	
			if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
				$errores .= 'Por favor escribe un correo valido <br />';
			}
		} else {
			$errores .= 'Por favor escribe un correo <br />';
		}
	
		if(!empty($mensaje)){
			$mensaje = htmlspecialchars($mensaje);
			$mensaje = trim($mensaje);
			$mensaje = stripslashes($mensaje);
		} else {
			$errores .= 'Por favor escribe el mensaje <br />';
		}
	
		if(!$errores){
			//Si no hay errores envia un correo
			//En localhost y xampp es necesaria una configuración adicional
			$enviar_a = 'tunombre@tuempresa.com';
			$asunto = 'Correo enviado desde miPagina.com';
			$mensaje_preparado = "De: $nombre \n";
			$mensaje_preparado .= "Correo: $correo \n";
			$mensaje_preparado .= "Telefono: $telefono \n";
			$mensaje_preparado .= "Mensaje:  . $mensaje";
	
			//mail($enviar_a, $asunto, $mensaje_preparado);
			$enviado = 'true';
		}
}



}

require '12.index.view.php';

?>