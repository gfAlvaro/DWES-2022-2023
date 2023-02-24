<?php
    class Menu {
        private $menu = [];

        public function __construct() { $this->menu[ "Home" ] = "index.php"; }

        public function anadeOpcion( $titulo = "", $url = "" ) { $this->menu[$titulo] = $url; }

        public function muestraVertical() {
            echo "<ul>";
            foreach( $this->menu as $opcion => $url )
                echo "<li><a href='".$url."'>".$opcion."</a></li>";
            echo "</ul>";
        }

        public function muestraHorizontal() {
            foreach( $this->menu as $opcion => $url ){
                echo "<a href='".$url."'>".$opcion."</a>";
                echo " - ";
            }
        }
    }