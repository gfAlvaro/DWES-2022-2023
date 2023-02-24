<?php
class Celda {
    private $texto;
    private $colorFuente;
    private $colorFondo;

    public function __construct($texto, $colorFuente, $colorFondo){
        $this->setTexto( $texto );
        $this->setColorFuente( $colorFuente );
        $this->setColorFondo( $colorFondo );
    }

    public function setTexto($texto){ $this->texto = $texto; }
    public function setColorFuente($colorFuente){ $this->colorFuente = $colorFuente; }
    public function setColorFondo($colorFondo){ $this->colorFondo = $colorFondo; }

    public function getTexto(){ return $this->texto; }
    public function getColorFuente(){ return $this->colorFuente; }
    public function getColorFondo(){ return $this->colorFondo; }

    public function __toString(){
        return "<td style='background-color: {$this->getColorFondo()}; color: {$this->getColorFuente()};'>{$this->getTexto()}</td>";
    }
}