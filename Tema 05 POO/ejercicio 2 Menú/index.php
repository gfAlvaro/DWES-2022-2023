<?php
    include('Menu.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Álvaro García Fuentes">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 2 Menú</title>
    </head>
    <body>
        <header><h1>Ejercicio 2 Menú</h1></header>
        <main>
        <?php
            $menu = new Menu();
            $menu->anadeOpcion("Mi página", "paginas/miPagina.php" );
            echo "<p>Se muestra el menú de forma vertical</p>";
            $menu->muestraVertical();
            echo "<br>";
            $menu->anadeOpcion("Página 2", "paginas/pagina2.php" );
            echo "<p>Se muestra el menú de forma horizontal</p>";
            $menu->muestraHorizontal();
        ?>
        </main>
        <footer>
            <br><br>
            <a href="../index.php">Atrás</a>
            <a href="#">Código fuente</a>
        </footer>
    </body>
</html>