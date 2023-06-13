<?php
// Define los valores para la cookie
$nombreCookie = "miCookie";
$valorCookie = "Hola, esta es mi cookie";
$expiracion = time() + (86400 * 30); // Caduca en 30 d�as
$ruta = "/"; // Disponible en todo el sitio
// $dominio = "ejemplo.com";
// $seguro = true; // Solo se env�a a trav�s de HTTPS
// $soloHTTP = true; // Accesible solo a trav�s de HTTP (no JavaScript)

// Establece la cookie
setcookie($nombreCookie, $valorCookie, $expiracion, $ruta); 
//+ ..., $dominio, $seguro, $soloHTTP)

// Mensaje de �xito
echo "La cookie ha sido establecida.";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Cookie establecida</title>
</head>
<body>
    <a href="ejemplo-mostrar-cookie.php">Ir a mostrar contenido</a>
</body>
</html>