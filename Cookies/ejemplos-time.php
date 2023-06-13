<?php

#1. Obtener la marca de tiempo actual:
$marcaTiempoActual = time();
echo "Marca de tiempo actual: " . $marcaTiempoActual;
echo "<br>";
#2. Calcular una fecha futura agregando segundos a la marca de tiempo actual:
$segundos = 3600; // 1 hora
$marcaTiempoFuturo = time() + $segundos;
echo "Marca de tiempo futura: " . $marcaTiempoFuturo;
echo "<br>";
#3. Convertir una marca de tiempo en una fecha legible:
$marcaTiempo = time();
$fechaLegible = date("d-m-Y H:i:s", $marcaTiempo);
echo "Fecha legible: " . $fechaLegible;
echo "<br>";
#4. Comparar dos marcas de tiempo:
$marcaTiempo1 = time();
$marcaTiempo2 = strtotime("2023-01-01");
if ($marcaTiempo1 < $marcaTiempo2) {
    echo "La marca de tiempo 1 es anterior a la marca de tiempo 2.";
} elseif ($marcaTiempo1 > $marcaTiempo2) {
    echo "La marca de tiempo 1 es posterior a la marca de tiempo 2.";
} else {
    echo "Ambas marcas de tiempo son iguales.";
}

echo "<br>AHORA<br>";
echo strtotime("now"), "\n";
echo "<br>10/09/2000<br>";
echo strtotime("10 September 2000"), "\n";
echo "<br>+1 DAY<br>";
echo strtotime("+1 day"), "\n";
echo "<br>+1 WEEK<br>";
echo strtotime("+1 week"), "\n";
echo "<br>+1 WEEK 2 DAYS 4 HOURS 2 SECONDS<br>";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
echo "<br>NEXT THURSDAY<br>";
echo strtotime("next Thursday"), "\n";
echo "<br>LAST MONDAY<br>";
echo strtotime("last Monday"), "\n";
echo "<br>";
echo "<br>";

//date("H:i:s")
$hora = time();
echo $hora;

while ($hora = $hora+1) {
    $reloj = date("H:i:s");
    echo $reloj;
}



?>