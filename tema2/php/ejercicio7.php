<?php
    $variable = 8;

    print "<p>";
    printf ("Valor actual %d", $variable);
    print "</p>";

    $variable = $variable + 2;
    print "<p>";
    printf ("Suma 2. Valor ahora %d", $variable);
    print "</p>";
            
    $variable = $variable - 4;
    print "<p>";
    printf ("Resta 4. Valor ahora %d", $variable);
    print "</p>";
            
    $variable = $variable * 5;
    print "<p>";
    printf ("Multiplica por 5. Valor ahora %d", $variable);
    print "</p>";

    $variable = $variable / 3;
    print "<p>";
    printf ("Divide por 3. Valor ahora %d", $variable);
    print "</p>";

    print "<p>";
    printf ("Incrementa el valor en 1. Valor ahora %d", ++$variable);
    print "</p>";
            
    print "<p>";
    printf ("Decrementa el valor en 1. Valor ahora %d", $variable--);
    print "</p>"; 
    echo "<p><a href='#'>Código fuente.</a></p>";
    echo "<p><a href='../index.html'>Atrás</a></p>";