<?php 

$edad = 54;

//La funcion isset responde true si la variable tiene valor y no es nula.
$edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad';

// if (isset($edad)) {
// 	$edad = $edad;
// } else {
// 	$edad = 'El usuario no establecio su edad';
// }

echo 'Edad: ' . $edad;

?>