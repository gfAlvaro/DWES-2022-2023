<?php
    include( "Calculadora.php" );
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Álvaro García Fuentes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 10 Calculadora</title>
</head>
<body>
    <header><h1>Ejercicio 10 Calculadora</h1></header>
    <main>
        <?php
            $num1 = 10;
            $num2 = 5;
            echo "<p>".$num1." + ".$num2." = ".Calculadora::sumar( $num1, $num2 )."</p>";
            echo "<p>".$num1." - ".$num2." = ".Calculadora::restar( $num1, $num2 )."</p>";
            echo "<p>".$num1." * ".$num2." = ".Calculadora::multiplicar( $num1, $num2 )."</p>";
            echo "<p>".$num1." / ".$num2." = ".Calculadora::dividir( $num1, $num2 )."</p>";
            echo "<p>".$num1." / 0 = ".Calculadora::dividir( $num1, 0 )."</p>";
        ?>
    </main>
    <footer>
        <a href='../index.php'>Atrás</a>
        <a href='#'>Código fuente</a>
    </footer>
</body>
</html>