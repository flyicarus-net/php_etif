<?php
$conexion = new mysqli('localhost', 'root', '', 'ejercicio_consola');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	$sql = "DELETE FROM USUARIOS WHERE id = 1";
	$conexion->query($sql);
	if($conexion->affected_rows >= 1){
		echo 'Filas eliminadas: ' . $conexion->affected_rows;
	}
}

?>