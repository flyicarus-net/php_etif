<?php

// if (condition1) {
//     # primera acción
// } 
// else if(condition2){
//     if (condition2.1) {
//         # primera acción de la segunda
//     } else if(condition2.2){
//         # segunda acción de la segunda 
//     }  else {
//         # Todo lo demás de las condiciones de condicion2
//     }
// } 
// else if(condition3){
//     # etc acción 3
// } 
// else {
//     # Todo lo demás
// }

$VelRizq=-10; //VELOCIDAD RUEDA IZQUIERDA
$VelRder=10; //VELOCIDAD RUEDA DERECHA
if ($VelRder<$VelRizq and $VelRder>0) {
    echo "girando hacia la derecha";
} elseif ($VelRizq<$VelRder and $VelRizq>0) {
    echo "girando hacia la izquierda";
} elseif ($VelRizq==$VelRder and $VelRder>0) {
    echo "avanzando";
} elseif ($VelRizq==$VelRder and $VelRder<0) {
    echo "retrocediendo";
}  elseif ($VelRizq==0 and $VelRder==0) {
    echo "stop";
}  elseif ($VelRizq>0 and $VelRder<0 and abs($VelRder) == abs($VelRizq)) {
    echo "gira sobre su eje en sentido antihorario";    
}  elseif ($VelRizq<0 and $VelRder>0 and abs($VelRder) == abs($VelRizq)) {
    echo "gira sobre su eje en sentido horario";  
}  elseif ($VelRizq>0 and $VelRder<0 and abs($VelRder) != abs($VelRizq)) {
    echo "translación en sentido antihorario";    
}  elseif ($VelRizq<0 and $VelRder>0 and abs($VelRder) != abs($VelRizq)) {
    echo "translación en sentido horario";  
}  else {
    echo "me rindo";
}; 





// $VelRizq=-13; //VELOCIDAD RUEDA IZQUIERDA
// $VelRder=13; //VELOCIDAD RUEDA DERECHA
// if ($VelRizq>=0 && $VelRder>=0) {
//     if($VelRizq>$VelRder){
//         echo "Estamos girando a la derecha";
//     } 
//     else if ($VelRizq<$VelRder){
//         echo "Estamos girando a la izquierda";
//     }
//     else if ($VelRizq==0 && $VelRder==0) {
//         echo 'Esta parado';
//     } else {
//         echo 'Corre hacia delante';
//     }
// }
// else if ($VelRizq<0 && $VelRder<0) {
//     if($VelRizq>$VelRder){
//         echo "Estamos girando a la izquierda hacia atrás";
//     } 
//     else if ($VelRizq<$VelRder){
//         echo "Estamos girando a la derecha hacia atrás";
//     } else {
//         echo 'Corre hacia atrás';
//     }
// }  
// else {
//     echo 'Gira sobre si mismo';
// }

?>