<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>DWES</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <header>
            <h1>Prácticas de DWES</h1>
            <h2>Ejercicios para la asignatura de Desarrollo Web en Entorno Servidor</h2>
        </header>
        <main>
            <?php
                echo "<ul>";
                foreach(  scandir( getcwd() ) as $file )
                    if( $file != 'index.php'
                     && $file != 'css'
                     && $file != '.'
                     && $file != '..'
                     && $file != "README.md" )
                        echo "<li><a href='$file/index.php'><b>$file</b></a></li>";
                echo "</ul>";
            ?>
        </main>
        <footer>
            <p><a href='https://github.com/gfAlvaro/DWES-2022-2023.git' class='footlink'>Repositorio con los ejercicios de esta web</a></p>
            <p>Álvaro García Fuentes<br> 
            Desarrollo Web en Entorno Servidor<br> 
            Desarrollo de Aplicaciones Web</p>
        </footer>
    </body>
</html>
