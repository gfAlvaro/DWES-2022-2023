<?php

    include_once( "Persona.php" );
    class Empleado extends Persona {
        private $sueldo;

        public function __construct( $nombre, $edad, $sueldo ) {
            parent::__construct( $nombre, $edad );
            $this->sueldo = $sueldo;
        }

        public function getSueldo() { return $this->sueldo; }
        public function setSueldo( $sueldo ) { $this->sueldo = $sueldo; }

        public function __toString() { return parent::__toString().", Sueldo: $this->sueldo"; }
    }