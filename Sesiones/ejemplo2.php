<?php
session_start();
$_SESSION['USUARIO1'] = $_GET['usuario'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejemplo2</title>
    </head>
    <body>
        <h3>Bienvenido a la página de ejemplo #2</h3>
        <form action="comprueba.php" method="get">
            <input type="text" name="usuario2" placeholder="Confirmar Usuario">
            <button type="submit">Confirmar</button>
        </form>
    </body>
</html>