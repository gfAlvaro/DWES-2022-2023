<?php
    abstract class Persona {
    protected $nombre;
    protected $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function getNombre() { return $this->nombre; }
    public function getEdad() { return $this->edad; }

    public function setNombre($nombre) { $this->nombre = $nombre; }
    public function setEdad($edad) { $this->edad = $edad; }

    public function __toString() { return "Nombre: $this->nombre, Edad: $this->edad"; }

    public function setDatosPersonales($nombre, $edad) {
        $this->setNombre( $nombre );
        $this->setEdad( $edad );
    }


}