<?php
    include_once( 'Celda.php' );
    class Tabla{
        private $celdas = [];
        private $filas;
        private $columnas;
        private $borde = 1;

        public function __construct( $filas, $columnas ){
            $this->filas = $filas;
            $this->columnas = $columnas;

            for($i = 0; $i < $this->filas; $i++){
                $this->celdas[$i] = [];
                for($j = 0; $j < $this->columnas; $j++){
                    $this->celdas[$i][$j] = new Celda("", "", "");
                }
            }
        }

        public function insertarCelda( $celda = new Celda(), $fila, $columna ){
            $this->celdas[$fila][$columna] = $celda;
        }

        public function getCelda($fila, $columna){ return $this->celdas[$fila][$columna]; }

        public function __toString(){
            $salida = "";
            $salida = "<table border=".$this->borde.">";
            for( $i = 0; $i < $this->filas; $i++ ){
                $salida .= "<tr>";
                for( $j = 0; $j < $this->columnas; $j++ )
                    $salida .= $this->celdas[$i][$j];
                $salida .= "</tr>";
            }
            $salida .= "</table>";

            return $salida;
        }
    }