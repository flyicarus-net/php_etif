<?php 
//Creamos la clase Profesor
    class Profesor {
        //Atributos que son las propiedades del objeto
        public $nombre = 'Marc';
        public $apellido = 'Esteve';
        public $altura = 1.75;
        public $materia = "Diseño Web";

        // echo $nombre; no funciona

        //M�todos
        public function hablar($mensaje){
            echo $mensaje;
        }
    }
    $persona = new Profesor();//Creamos OBJETO
    // echo gettype($persona); //Muestra tipo "object"
    echo 'El nombre del profesor es ' . $persona->nombre . ' ' . $persona->apellido . " con una altura de " . $persona->altura . 'm. Y enseña la materia: ' . $persona->materia .'.' ; 
    $persona->hablar("<br>Un cordial saludo");
?>