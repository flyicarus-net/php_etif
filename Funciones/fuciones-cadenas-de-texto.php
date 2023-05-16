<?php 

$texto = '  Adeu Andreu  ';

// echo htmlspecialchars($texto); //Todos los caracteres especiales < > & '' "" se convierten en entidades HTML (revisar código fuente) para no ser ejecutados, como por ejemplo que el usuario pueda inyectar código <b>Hola</b> o peor aun, código Javascript que se pueda ejecutar
//echo trim($texto); //Quita los espacios al principio y al final
// echo strlen($texto); //Cuenta los caracteres totales del string
//echo substr($texto, -9, 7); //Recorta la cadena de texto en este caso del primer string hasta el quinto. Podriamos almacenarlo en otra variable
// echo strtoupper($texto); //Convierte a mayúsculas
// echo strtolower($texto); //Convierte a minúsculas
// echo strpos($texto, 'n'); //Posición del string
// echo strrev($texto);  //Invierte el texto
// $nuevoTexto = str_replace("Andreu", "Jordi", $texto); //Sustituye textos
// echo $nuevoTexto;


$texto = "Ai bo fo bia ";
$texto = strtoupper($texto);
$texto = str_replace(" ", "", $texto);
$texto = trim($texto);
$textoRev = strrev($texto);
if ($texto == $textoRev) {
    echo " Es un palindromo";
} else {
    echo " no es un palindromo";
}

echo " $texto";
echo "<br>";
echo "<br>";




//Detectar si los dos primeros y los dos ultimos caracteres son iguales
echo $texto1 = strtoupper("Jorge");
echo "<br>";
echo $texto2 = strtoupper("Jordi");
echo "<br>";
$t1 = substr($texto1, 0, 2);
$t2 = substr($texto2, 0, 2);
$t3 = substr($texto1, -2);
$t4 = substr($texto2, -2);

if ($t1 == $t2) {
    echo "Los dos primeros caracteres son iguales";
} else {
    echo "Los dos primeros caracteres no son iguales";
};
echo "<br>";
if ($t3 == $t4) {
    echo "Los dos ultimos caracteres son iguales";
} else {
    echo "Los dos ultimos caracteres no son iguales";
}





?>