<?php
    $x = 10;
    $y = 7;

    print "<p>";
    printf ("%d + %d = %d", $x, $y, $x+$y);
    print "</p>"; 
            
    print "<p>";
    printf ("<pre>%d - %s %d = %d</pre>", $x, "      ", $y, $x-$y);
    print "</p>"; 

    print "<p>";
    printf ("%d * %d = %d", $x, $y, $x*$y);
    print "</p>"; 
            
    print "<p>";
    printf ("%d / %d = %f", $x, $y, $x/$y );
    print "</p>"; 

    print "<p>";
    printf ("%d %% %d = %d", $x, $y, $x%$y);
    print "</p>";
    echo "<p><a href='#'>Código fuente.</a></p>";
    echo "<p><a href='../index.html'>Atrás</a></p>";