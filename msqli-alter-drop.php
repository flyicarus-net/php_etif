<?php 
$conexion = new mysqli('localhost', 'root', '', 'ejercicio_consola');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	$statement = $conexion->prepare("ALTER TABLE `USUARIOS` DROP `EDAD`");
	// Ejecutamos la sentencia.
	$statement->execute();
    echo 'tabla ELIMINADA exitosamente';
}
?>