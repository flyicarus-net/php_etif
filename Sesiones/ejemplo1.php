<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejemplo1</title>
    </head>

    <body>
        <h3>Bienvenido a la página de ejemplo #1</h3>
        <h3>Hola<?php if (isset($_SESSION['USUARIO2'])) { echo ' ' . $_SESSION['USUARIO2']; } ?>!</h3>
        <form action="ejemplo2.php" method="get">
            <input type="text" name="usuario" placeholder="Ingrese Usuario">
            <button type="submit">Crear Usuario</button>
        </form>
        <p><?php if (isset($_SESSION['USUARIO2'])) { echo '<a href="cerrar_sesion.php">Cerrar Sesión</a>'; } ?></p>
    </body>
</html>