<?php 
//Creamos la clase Profesor
    class Profesor {
        //PROPIEDADES del objeto
        //ATRIBUTOS
        private $nombre;
        private $materia;
        //MÉTODOS
        //Getters y Setters
        public function getNombre() {
            return $this->nombre;
        }
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }
        public function getMateria() {
            return $this->materia;
        }
        public function setMateria($materia) {
            $this->materia = $materia;
        }
    }
    
    $p1 = new Profesor();
    //echo $p1->nombre; //No se puede porque los atributos son privados
    $p1->setNombre("Juan");
    $p1->setMateria("Historia");
    echo 'El nombre del profesor es '. $p1->getNombre() .' e imparte la materia: ' . $p1->getMateria() .'<br>' ;  // Imprime "Juan"

    $p2 = new Profesor();
    $p2->setNombre("Pedro");
    $p2->setMateria("Matemáticas");
    echo 'El nombre del profesor es '. $p2->getNombre() .' e imparte la materia: ' . $p2->getMateria() .'<br>' ;

    $p3 = new Profesor();
    $p3->setNombre("Manolo");
    $p3->setMateria("Filosofía");
    echo 'El nombre del profesor es '. $p3->getNombre() .' e imparte la materia: ' . $p3->getMateria() .'<br>' ;
        
    // CONCATENANDO
    echo '<br>' . $p1->getNombre() . ', ' . $p2->getNombre() . ' y ' . $p3->getNombre() . ' son tres profesores de las materias: ' . $p1->getMateria() . ', ' . $p2->getMateria() . ' y ' . $p3->getMateria() . ' respectivamente.';
    //CON CORCHETES
    echo " <br> {$p1->getNombre()}, {$p2->getNombre()} y {$p3->getNombre()} son tres profesores de las materias: {$p1->getMateria()}, {$p2->getMateria()} y {$p3->getMateria()} respectivamente."
?>
