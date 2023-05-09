<?php

    class Persona {
        //Atributos
        public $nombre = array();
        public $apellido = array();

        //Métodos
        public function guardar($nombre, $apellido){
            $this->nombre[] = $nombre;
            $this->apellido[] = $apellido;
        }
        public function mostrar(){
            for($i=0; $i<count($this->nombre); $i++){
                $this->formatear($this->nombre[$i], $this->apellido[$i]);
            }
        }
        public function formatear($nombre, $apellido){
            echo 'Nombre: ' . $nombre . ' | Apellido: ' . $apellido . '<br>';
        }
    }

    $persona = new Persona();
    $persona->guardar('Jose', 'Fernández');
    $persona->guardar('Arnau', 'Garcia');
    $persona->guardar('Jorge', 'Castillo');
    $persona->guardar('Enzo', 'Perez');
    $persona->guardar('Nelson', 'Nuñez');

    $persona->mostrar();

?>