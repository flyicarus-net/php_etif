<?php
$conexion = new mysqli('localhost', 'root', '', 'ejercicio_consola');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	$statement = $conexion->prepare("UPDATE `usuarios` SET `id` = 2, `nombre` = 'Marcos', `email` = 'marcos@etif.es' WHERE `usuarios`.`id` = 7");

	// Ejecutamos la sentencia.
	$statement->execute();
}

?>