<?php
    class Empleado {
        private $nombre;
        private $sueldo;

        public function getNombre() { return $this->nombre; }
        public function getSueldo() { return $this->sueldo; }

        public function setNombre( $nombre ) { $this->nombre = $nombre; }
        public function setSueldo( $sueldo ) { $this->sueldo = $sueldo; }

        public function inicializar( $nombre, $sueldo ) {
            $this->setNombre( $nombre );
            $this->setSueldo( $sueldo );
        }

        public function __toString() {
            return "Nombre: ".$this->getNombre()." Sueldo: ".$this->getSueldo()
            .($this->sueldo > 3000? " Debe pagar impuestos." : " No debe pagar impuestos." );
        }
    }