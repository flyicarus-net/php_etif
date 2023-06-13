<?php

$errores='';

if (isset($_POST['submit'])) {
    $nombre=$_POST['nom'];
    $email=$_POST['correu'];

    if (!empty($nombre)) {

        $nombre=filter_var($nombre,htmlspecialchars($nombre)); 

        echo 'Tu nombre es ' . $nombre . '<br>';
    } else {
        $errores .= 'Por favor escribe un nombre <br>';
    }
    if (!empty($email)) {
        $email=filter_var($email, FILTER_SANITIZE_EMAIL);//Filtro de "sanea" el correo
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {//Filtro de "validaciÃ³n" del correo
            $errores .= 'Por favor escribe un correo válido <br>';
        } else {
            echo 'Tu correo es ' . $email . '<br>';
        }
    } else {
        $errores .= 'Por favor escribe un correo <br>';
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>formulari de Contacte</title>
</head>
<body>
    <form action="" method="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" >
        <input type="text" name="nom" placeholder="Nom">
        <input type="email" name="correu" placeholder="Correu">
        <input type="submit" name="submit" placeholder="Enviar Correu">

    </form>
</body>
</html>