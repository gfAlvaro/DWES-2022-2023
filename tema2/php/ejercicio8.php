<?php
    $cadena = "Harry";
    $entero = 123456789012345678;
    $variable = NULL;

    printf("<p> %s(%d) %s </p>", gettype($cadena), strlen($cadena), $cadena );
    echo "<p>$cadena</p>";
    printf("<p>%s(%d)</p>", gettype($entero), strlen($entero) );
    printf("%s", gettype($variable) );
    echo "<p><a href='#'>Código fuente.</a></p>";
    echo "<p><a href='../index.html'>Atrás</a></p>";