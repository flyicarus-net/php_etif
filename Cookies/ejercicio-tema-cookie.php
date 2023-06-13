<?php

//1er parámetro es igual al nombre de la cookie=font-size
//Valor de esa cookie=30px
// El tiempo de expiración es en 30 dias(segundos*minutos*horas*dias). PHP traduce la fecha al formato adecuado
// 4º Parámetro: Ruta y dominio
// setcookie('font-size', '30px', time() - 60, '/');
// Guarda 'font-size' como clave del array asociativo en $_COOKIE['font-size'] = '30px' será el valor de esa clave ['font-size'] => '30px' valor

// setcookie('font-size', '12px', time() + 60 * 60 * 24 * 30, '/');
// setcookie('background-color', 'yellow', time() + 60 * 60 * 24 * 30, '/' );
// setcookie('color', 'black', time() + 60 * 60 * 24 * 30, '/'); //Crea cookie de nombre color, valor yellow
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio-tema-cookie</title>
</head>
<body>
<form action="ejercicio-contenido-cookie.php" method="post"> 
        <input type="text" name="fondo" placeholder="Ingrese color de fondo" id="">
        <input type="text" name="colorTexto" placeholder="Ingrese color de texto" id="">
        <input type="text" name="tamanyTexto" placeholder="Ingrese tamaño de texto" id="">
        <input type="submit" name="submit2" value="Enviar" >
</form>
</body>
</html>

