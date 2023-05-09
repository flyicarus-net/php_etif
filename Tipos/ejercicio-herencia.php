<?php


//SUPERCLASE
class Vehiculo
{
    protected $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getMover()
    {
        echo 'el ' . $this->nombre . 'se está moviendo';
    }

    public function getDonde()
    {
    }
}
//SUBCLASE
class Coche extends Vehiculo
{
    private $cant_puertas;

    public function getCant_puertas()
    {
        echo $this->cant_puertas;
    }
    public function getDonde()
    {
        echo 'el ' . $this->nombre . ' se mueve en la carretera ' . $this->cant_puertas;
    }
}

//SUBCLASE

class Avion extends Vehiculo
{
    private $cant_alas;

    public function getCant_alas()
    {
        echo $this->cant_alas;
    }
    public function getDonde()
    {
        echo 'el ' . $this->nombre . ' aterriza en el aeropuerto ' . $this->cant_alas;
    }
}

//SUBCLASE

class Barco extends Vehiculo
{
    private $cant_anclas;

    public function getCant_anclas()
    {
        echo $this->cant_anclas;
    }

    public function getDonde()
    {
        echo 'el ' . $this->nombre . ' navega en el mar  ' . $this->cant_anclas;
    }
}


$coche = new Coche("Turismo");
$avion = new Avion("Jet");
$barco = new Barco("Crucero");


echo $coche->getNombre() . "\n";
$coche->getCant_puertas();
echo $avion->getNombre() . "\n";
$avion->getCant_alas();
echo $barco->getNombre() . "\n";
$barco->getCant_anclas();

$coche->getDonde();
$avion->getDonde();
$barco->getDonde();
?>