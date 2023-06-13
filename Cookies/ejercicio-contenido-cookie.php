<?php 
// setcookie('font-size', '12px', time() + 60 * 60 * 24 * 30, '/');
// setcookie('background-color', 'yellow', time() + 60 * 60 * 24 * 30, '/' );
// setcookie('color', 'black', time() + 60 * 60 * 24 * 30, '/'); //Crea cookie de nombre color, valor yellow


if ($_POST['tamanyTexto'] != null) {
	$tamaño = $_POST['tamanyTexto']; 
    $_COOKIE['font-size'] = $tamaño;
} else {
	$tamaño = $_COOKIE['font-size'];
}
if ($_POST['colorTexto'] != null) {
	$color = $_POST['colorTexto']; 
    $_COOKIE['color'] = $color;
} else {
	$color = $_COOKIE['color'];
}
if ($_POST['fondo']  != null) {
	$backgroundColor = $_POST['fondo']; 
    $_COOKIE['background-color'] = $backgroundColor;
} else {
	$backgroundColor = $_COOKIE['background-color'];
}
?>
<style>
    p {
        font-size: <?php echo $tamaño; ?>;
        color: <?php echo $color; ?>;
        background-color: <?php echo $backgroundColor; ?>
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio-contenido-cookie</title>
</head>
<body>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque vero rem facere at dignissimos modi quis voluptas. Eos aspernatur maiores minus alias sequi totam! Quae reiciendis necessitatibus nobis ratione lorem </p>
    <a href="ejercicio-tema-cookie.php">Volver</a>
</body>
</html>