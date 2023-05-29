<?php 

$amigo = array('telefono' => 6545647, 'altura'=>175, 'ciudad'=>'Castelldefels');

//EXTRACT
extract($amigo); //extrae las claves de un array asociativo como si fueran variables
echo $telefono;
echo "<br>";
echo $altura;
echo "<br>";
echo $ciudad;

echo "<br>";

$semana = array(
	'Lunes', 'Martes', 'Miércoles',
 	'Jueves', 'Viernes', 'Sábado', 'Domingo'
);

echo "<br>";


// //ARRAY POP
// $ultimo_dia = array_pop($semana); //Extraer el último valor del array en $semana y guardandolo en la variable $ultimo_dia
// foreach ($semana as $dia) {
// 	echo $dia . '<br />';
// }
// echo "<br>";
// echo $ultimo_dia;

// echo "<br>";

// //ARRAY PUSH
// $fruta = array("naranja", "plátano"); 
// array_push($fruta, "manzana", "arándano"); //Agrega valores al array $fruta en la ultima posición
// print_r($fruta); //Print_r($array) muestra TODO el array

// echo "<br>";
// echo "<br>";

// //JOIN
// echo join(', <br />', $semana); //Une los valores de array con un salto de linea

// echo "<br>";
// echo "<br>";
// //COUNT
// echo count($semana); //cuenta cuandos dias hay en el array $semana

// echo "<br>";
// echo "<br>";
// //RSORT
// rsort($semana);
// echo join(', ', $semana);

// echo "<br>";

// //ARRAY REVERSE
// $semana_reverse = array_reverse($semana); //Orden inverso del array
// echo join(', ', $semana_reverse);


//EJERCICIO
$ultimo_dia = array_pop($semana);
echo join(', <br />', $semana);
echo ' y <br />', $ultimo_dia;

?>