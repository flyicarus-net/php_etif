<?php 
session_start();
session_destroy();
echo 'Has cerrado sesión';
echo '<br>';
echo '<a href="ejemplo1.php">Volver a Inicio</a>';
?>