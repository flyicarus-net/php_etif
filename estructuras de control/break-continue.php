<?php 

$paises = array(
	'Mexico', 'Japón', 'China', 
	'Argentina', 'Marruecos', 'Tailandia'
);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Foreach break-continue</title>
</head>
<body>
	<h1>Paises</h1>
	<?php
    #Solo muestra China
    // foreach($paises as $pais){
    // 	if ($pais == 'China') {
    // 		echo $pais . '<br />'; 
    //  	}
    // }

    #Muestra todos menos China
    // foreach($paises as $pais){
    // 	if ($pais == 'China') {
    //     	continue; //SALTA LAS SIGUIENTES INSTRUCCIONES PERO SIGUE RECORRIENDO EL ARRAY
    //     }
    // 	echo $pais . '<br />';
    // }

    // #USO DEL BREAK
    foreach ($paises as $pais) {
        echo $pais . '<br />';
        if ($pais == 'Marruecos') {
            break; //INTERRUMPE Y FINALIZA EL RECORRIDO DEL ARRAY
        }
    }
	?>
</body>
</html>