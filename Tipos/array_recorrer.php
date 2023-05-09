<?php 

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril', 
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

$amigos = array('Leo', 'Rafa', 'Claudio', 'Seba', 'Pablo', 'Nacho', 'Carlitos', 'Jaume', 'Alberto', 'Hernán');
sort($amigos); //orden ascendente

$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
rsort($semana); //orden inverso
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Meses del Año</title>
</head>
<body>
	<h2>Meses del Año</h2>
	<ul>
		<!-- <li><?php echo $meses[0]; ?></li> Podriamos colocarlos de uno en uno con un listado -->
		<?php 

		# Mediante el ciclo foreach podemos recorrer un array y ejecutar determinadas instrucciones por cada elemento del array.
		# Esta es la forma mas facil de recorrer arrays en PHP.
		foreach($meses as $mes){
			echo '<li>' . $mes . '</li>'; // echo $meses[0]; solo repetiria el primero
		}

		?>
	</ul>

    <h2>Amigos del Futbol</h2>
        <ul>
           <?php 
                foreach($amigos as $amigo) {
                    echo '<li>' . $amigo . '</li>';
                };
            ?>
        </ul>

        <h2>Dias de la semana</h2>
        <ul>
           <?php 
                foreach($semana as $dia) {
                    echo '<li>' . $dia . '</li>';
                };
            ?>
        </ul>

</body>
</html>