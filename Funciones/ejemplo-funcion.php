<?php 

function calcular_area_triangulo($base, $altura){
	$resultado = ($base * $altura) / 2;
	return $resultado;
}

$area_triangulo = calcular_area_triangulo(10, 10);

echo 'El triangulo tiene un area de ' . $area_triangulo . ' metros cuadrados';

//EJERCICIO: CREAR UNA FUNCIÓN PARA CALCULAR EL AREA DE UN HEXÁGONO DE FORMULA = (PERÍMETRO * APOTEMA)/2 Y EL PERÍMETRO ES IGUAL A UN LADO *6
echo "<br>";


function calcular_perimetro ($lado) {
  return ($lado * 6);
}

$perimetro = calcular_perimetro(5);
echo 'El perimetro del hexagono es ' . $perimetro . ' metros cuadrados';

echo "<br>";



function calcular_area_hexagono($perimetro, $apotema) {
    return ($perimetro * $apotema) / 2;
}

$area_hexagono = calcular_area_hexagono($perimetro,5);

echo 'El hexagono tiene un area de ' . $area_hexagono . ' metros cuadrados';


?>