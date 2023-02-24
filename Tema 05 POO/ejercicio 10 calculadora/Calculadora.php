<?php
    /**
     * @author Álvaro García Fuentes
     */
    class Calculadora {
        public static function sumar( $num1, $num2 ) { return $num1 + $num2; }
        public static function restar( $num1, $num2 ) { return $num1 - $num2; }
        public static function multiplicar( $num1, $num2 ) { return $num1 * $num2; }
        public static function dividir( $num1, $num2 ) {
            return $num2 == 0 ? "No se puede dividir por cero" : $num1 / $num2;
        }
    }