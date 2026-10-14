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
            echo "<h2>Operaciones con fechas</h2>";
            echo "Fecha actual: " . $fechaActual->format('d/m/Y') . "<br>";
            echo "Día de la semana: ".$fechaActual->format('l')."<br>";
            $fechaFutura = $fechaActual->modify('+60 days');
            echo "Fecha dentro de 60 días: ".$fechaFutura->format('d/m/Y')."<br>";
            echo "Día de la semana: ".$fechaFutura->format('l')."<br>";
        ?>
    </body>
</html>