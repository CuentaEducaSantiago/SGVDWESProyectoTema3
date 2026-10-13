<!DOCTYPE html>
<html lang="es">
    <!--
    Autor: Santiago González Vicente
    Fecha Modificacion: 2026-10-04
    Descripcion: Indice DAW2
    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Santiago González Vicente</title>
    </head>
    <body>
        <h2><a href='../indexProyectoTema3.php'>volver</a></h2>
        <?php
            date_default_timezone_set("Europe/Madrid");
            $fechaActual = new DateTime();
            echo "<h4>Fecha Actual:".$fechaActual.format("d/m/y").", dia de la semana: ".$fechaActual.format("D")."</h4><br>";
            $fechaActual->add(new DateInterval('P60D'));
            echo "<h4>Fecha en 60 DIAS:".$fechaActual.format("d/m/y").", dia de la semana: ".$fechaActual.format("D")."</h4><br>";
        ?>
    </body>
</html>