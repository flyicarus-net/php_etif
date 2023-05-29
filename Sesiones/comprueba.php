<?php 
    session_start();

    $_SESSION['USUARIO2'] = $_GET['usuario2'];

    if ($_SESSION['USUARIO2'] == "" ) {
        echo '<h3>Por favor confirme usuario</h3>';
        echo '<a href="ejemplo1.php">Reintentar</a>';
        session_destroy();
    } elseif ($_SESSION['USUARIO1'] == $_SESSION['USUARIO2'] ) {
        echo '<h3>Usuario Correcto</h3>';
        echo 'Bienvenid@ ' . $_SESSION['USUARIO2'] . '!' ;
        echo '<br>';
        echo '<a href="ejemplo1.php">Volver a Inicio</a>';
        echo '<br>';
        echo '<a href="cerrar_sesion.php">Cerrar Sesión</a>';
    } else {
        echo '<h3>Usuario Inexistente</h3>';
        echo '<a href="ejemplo1.php">Reintentar</a>';
        session_destroy();
}
?>