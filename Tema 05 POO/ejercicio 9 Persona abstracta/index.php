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
    <title>Ejercicio 9 Persona abstracta</title>
</head>
<body>
    <header><h1>Ejercicio 9 Persona abstracta</h1></header>
    <main>
    <?php
        echo "<h2>Persona</h2>";
        try{
            $miPersona = new Persona( "Mario", 25 );
            echo $miPersona;
            echo "<p>Cambiamos los datos de la persona.</p>";
            $miPersona->setNombre( "Juan" );
            $miPersona->setEdad( 30 );
            echo "<p>".$miPersona."</p>";
        } catch (Exception $e) {
            echo "<p>Error: ".$e->getMessage()."</p>";
            echo "<p>No se puede instanciar una clase abstracta, de modo que se lanza este error.</p>";
        }

        echo "<h2>Empleado</h2>";
        $miEmpleado = new Empleado( "Juan", 30, 100 );
        echo "<h2>Empleado</h2>";
        $miEmpleado = new Empleado( "Ana", 30, 5000 );
        echo $miEmpleado;
        echo "<p>Cambiamos los datos de la empleada.</p>";
        $miEmpleado->setNombre( "Laura" );
        $miEmpleado->setEdad( 25 );
        $miEmpleado->setSueldo( 6000 );
        echo "<p>".$miEmpleado."</p>";
        echo "<p>La clase Empleado se puede instanciar y usar sus propiedades y métodos heredados de la clase abstracta Persona.</p>";
    ?>
    </main>
    <footer>
        <br><br>
        <a href='../index.php'>Atrás</a>
        <a href='#'>Código fuente</a>
    </footer>
</body>
</html>