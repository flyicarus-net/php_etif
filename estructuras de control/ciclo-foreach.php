<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);


$marc = array('telefono' => 54743221, 'edad' => 35, 'ciudad' => 'Castelldefels');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Recorrer array asociativo tambi�n</title>
</head>

<body>
    <ul>
        <?php
        # Con el ciclo foreach podemos recorrer MANERA SECUENCIAL ARRAYS INDEXADOS de una manera muy f�cil.
        foreach ($meses as $mes) {
            echo '<li>' . $mes . '</li>';
        }
        ?>
    </ul>
    <ul>
        <?php
        # El ciclo foreach tambi�n NOS PERMITE recorrer DE MANERA SECUENCIAL ARRAYS ASOCIATIVOS.
        foreach ($marc as $dato => $valor) {
            echo '<li>' . $dato . ' : ' . $valor . '</li>';
        }
        ?>
    </ul>
</body>

</html>