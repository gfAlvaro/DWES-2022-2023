<?php
    include_once( "Persona.php" );
    include_once( "Empleado.php" );
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Álvaro García Fuentes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6-7-8 Persona</title>
</head>
<body>
    <header><h1>Ejercicio 6-7-8 Persona</h1></header>
    <main>
    <?php
        echo "<h2>Persona</h2>";
        $miPersona = new Persona( "Mario", 25 );
        echo $miPersona;
        echo "<p>Cambiamos los datos de la persona.</p>";
        $miPersona->setNombre( "Juan" );
        $miPersona->setEdad( 30 );
        echo "<p>".$miPersona."</p>";

        echo "<h2>Empleado</h2>";
        $miEmpleado = new Empleado( "Ana", 30, 5000 );
        echo $miEmpleado;
        echo "<p>Cambiamos los datos de la empleada.</p>";
        $miEmpleado->setNombre( "Laura" );
        $miEmpleado->setEdad( 25 );
        $miEmpleado->setSueldo( 6000 );
        echo "<p>".$miEmpleado."</p>";
        echo "<p>Al modificar en la clase Empleado un atributo heredado de la clase Persona,<br> este sólo será modificado si si el atributo fue declarado como protected y no como private.<br> De otra forma se producira un error de sintaxis.</p>";
    ?>
    </main>
    <footer>
        <br><br>
        <a href='../index.php'>Atrás</a>
        <a href='#'>Código fuente</a>
    </footer>
</body>
</html>