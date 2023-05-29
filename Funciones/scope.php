<?php

$numero = 7; //Variable global = acceso desde cualquier parte del c�digo excepto dentro de funciones

// function mostrarNumero() {
// 	echo $numero;
// }
// mostrarNumero(); // Dar� un error, ya que no encuentra $numero dentro de la funci�n

# Para usarla dentro de la funci�n pasar como par�mentro
function mostrarNumero($numero){
	echo $numero;
}
mostrarNumero($numero);

# Lo mismo si definimos en la funci�n y queremos utilizarla fuera
// function mostrarNumero(){
// 	$numero = 10;
// }
// mostrarNumero();
//echo $numero; //No se puede acceder porque la variable esta dentro de la funci�n, necesitaremos el "return"

// function mostrarNumero(){
// 	$numero = 10;
// 	// return $numero;
// }

// echo mostrarNumero();

#RESUMEN:
//1. Por par�metro para entrar la variable en la funci�n
//2. Con el return para sacar la variable de la funci�n

?>