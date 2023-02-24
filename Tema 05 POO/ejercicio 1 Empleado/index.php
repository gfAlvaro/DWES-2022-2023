<?php
    include( "Empleado.php" );

    if(  isset( $_POST )  ){
        $miEmpleado = new Empleado();
        if(  isset( $_POST['nombre'] ) && isset( $_POST['sueldo'] )  )
            $miEmpleado->inicializar( $_POST['nombre'], $_POST['sueldo'] );
    }
?>
<!DOCTYPE html>
<html lang="ES">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Álvaro García Fuentes">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <header><h1>Ejercicio 1</h1></header>
        <main>
            <form action='index.php' method='POST'>
                <label>Nombre: <input id="nombre" name="nombre" type="text"></label><br>
                <label>Sueldo: <input id="sueldo" name="sueldo" type="text"></label><br>
                <button type="submit">Enviar</button>
            </form>
            <?php
                if(  isset( $_POST )  )
                    echo $miEmpleado;
            ?>
        <main>
        <footer>
            <a href="#">Código Fuente</a>
            <a href="../index.php">Atrás</a>
        </footer>
    </body>
</html>
