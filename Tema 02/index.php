<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="author" content="Álvaro García Fuentes" />
        <meta charset="utf-8" />
        <title>DWES Tema 2</title>
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
    <body>
        <header><h1>Ejercicios Tema 2</h1></header>
        <main>
            <?php
                echo "<ul>";
                for( $i = 1; $i < 11; $i++ )
                    echo "<li><a href='php/ejercicio$i.php'>Ejercicio $i</a></li>";
                echo "</ul>";
            ?>
        </main>
        <footer>
            <p><a href="../index.html" class='footlink'>Atrás</a></p>
            <p><a href="#" class='footlink'>Código fuente</a></p>
        </footer>
    </body>
</html>