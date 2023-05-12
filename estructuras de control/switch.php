<?php 

# Sintax del Switch
// switch (variable) {
// 	case 'value':
// 		# code...
// 		break;
	
// 	default:
// 		# code...
// 		break;
// }

$mes = 'Marzo';

switch($mes){
	case 'Diciembre':
		echo "Feliz Navidad!";
	break;

	case 'Enero':
		echo "Feliz Año Nuevo";
	break;

	default:
		echo "En este mes no se celebra nada";
	break;
}
echo "<br>";
# Alternativa a Switch

// if ($mes == 'Diciembre') {
// 	echo "Feliz Navidad";
// } elseif ($mes == 'Enero') {
// 	echo "Feliz Año Nuevo";
// } else {
// 	echo "En este mes no se celebra nada";
// }


$dia = date("l");

switch($dia){
	case 'Monday':
		echo "Hoy es Lunes";
	break;

	case 'Tuesday':
		echo "Hoy es Martes";
	break;

    case 'Wednesday':
		echo "Hoy es Miércoles";
	break;

    case 'Thursday':
		echo "Hoy es Jueves";
	break;

    case 'Friday':
		echo "Hoy es Viernes";
	break;

	default:
		echo "Buen Fin de Semana";
	break;
}

?>