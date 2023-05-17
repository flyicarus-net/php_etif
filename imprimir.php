<?php 
//Codi PHP
Class Impressora {
    public $tinta = true;
    public $paper = true;
    public $tamany = 'DINA4';
    public $color = 'negre';

    //Metodes
    public function Imprimeix($tinta, $paper, $tamany) {
        if ($tinta and $paper == true) {
            echo 'Es pot imprimir en ' . $tamany . ' en color ' . $this->color;
        } else {
           echo 'Falta tinta o paper';
        }
    }

    
}

$obj = new Impressora(); 
$obj->Imprimeix(true, true, "DINA4");   // Muestra Public, Protected y Private

?>

<!DOCTYPE html>
<html lang= "es">
    <head>
        <title>Impressió del document</title>
    </head>
    <body>
        <h1>Titular del document</h1>
        <?php
            $semana = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado", "Domingo"];
            sort($semana);
            foreach ($semana as $clave => $valor) {
                echo '<li>' . $clave . ' : ' . $valor . '</li>';
            }            
        ?>
    </body>
</html>