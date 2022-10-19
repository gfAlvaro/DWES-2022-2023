<?php
    // area circulo y longitud de circunferencia
    $radio = 4;
    $nPi = number_format( M_PI, 4 );
    $area = number_format( $nPi * Math.pow($radio, 2), 4 );
    $longitud = number_format( 2*$nPi*$radio, 4 );

    echo "<p>Radio del círculo = $radio</p>";
    echo "<p>Área del círculo = $area</p>";
    echo "<p>Longitud de la circunferencia = $longitud</p>";
    echo "<p><a href='#'>Código fuente.</a></p>";
    echo "<p><a href='../index.html'>Atrás</a></p>";