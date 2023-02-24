<?php
    include_once('Tabla.php');
    include_once('Celda.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Álvaro García Fuentes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 Tabla</title>
</head>
<body>
    <header><h1>Ejercicio 3 Tabla</h1></header>
    <main>
    <?php
        echo "<p>Creamos tabla con filas y columnas</p>";
        $miTabla = new Tabla(3, 3);

        $miTabla -> insertarCelda(new Celda("Celda 1", "red", "white"), 0, 0);
        $miTabla -> insertarCelda(new Celda("Celda 2", "green", "white"), 0, 1);
        $miTabla -> insertarCelda(new Celda("Celda 3", "blue", "white"), 0, 2);
        $miTabla -> insertarCelda(new Celda("Celda 4", "yellow", "white"), 1, 0);
        $miTabla -> insertarCelda(new Celda("Celda 5", "orange", "white"), 1, 1);
        echo $miTabla;
        echo "<p>Insertamos más texto en celdas y mostramos tabla modificada</p>";
        $miTabla -> insertarCelda(new Celda("Celda 6", "purple", "white"), 1, 2);
        $miTabla -> insertarCelda(new Celda("Celda 7", "pink", "white"), 2, 0);
        $miTabla -> insertarCelda(new Celda("Celda 8", "brown", "white"), 2, 1);
        $miTabla -> insertarCelda(new Celda("Celda 9", "gray", "white"), 2, 2);
        echo $miTabla;
    ?>
    </main>
    <footer>
        <br><br>
        <a href='../index.php'>Atrás</a>
        <a href='#'>Código fuente</a>
    </footer>
</body>
</html>