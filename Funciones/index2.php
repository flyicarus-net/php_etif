<?php
if (!isset($lado)) {

    $mensaje = "Por favor ingrese un numero";    
    $lado = $_GET["numero"];
} else {
   

       
    function calcular_perimetro ($lado) {
        return ($lado * 6);
      }
      
      $perimetro = calcular_perimetro($lado);
      //echo 'El perimetro del hexagono es ' . $perimetro . ' metros cuadrados';
      
      
      
    function calcular_area_hexagono($perimetro, $apotema) {
        return ($perimetro * $apotema) / 2;
    }
    
    $area_hexagono = calcular_area_hexagono($perimetro,5);
    
    $mensaje = 'El hexagono tiene un area de ' . $area_hexagono . ' metros cuadrados';
}







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Hexágono</title>
</head>
<body>
    <?php include 'vista1.php' ?>
      
</body>
</html>