<?php 
$conexion = new mysqli('localhost', 'root', '', 'ejercicio_consola');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	$statement = $conexion->prepare("ALTER TABLE `USUARIOS` ADD (`EDAD` INT NOT NULL )");
	// Ejecutamos la sentencia.
	$statement->execute();
    echo 'tabla MODIFICADA exitosamente';
}
?>