<!DOCTYPE html>
<html lang="es">
    <!--
    Autor: Santiago González Vicente
    Fecha Modificacion: 2026-09-28
    Descripcion: Indice DAW2
    -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Santiago González Vicente</title>
    </head>
    <body>
        <?php
            echo "<a href='ejercicio21.php'>⬅ Volver al formulario</a><br>";
            $Nombre = $_POST['Nombre'];
            $F_Nacimiento = $_POST['F_N'];
            $Curso = $_POST['Curso'];
            $Asignatura = $_POST['Asignatura'];
            echo "<h4>Nombre:". $Nombre."</h4><br>";
            echo "<h4>Fecha Nacimiento:". $F_Nacimiento."</h4><br>";
            echo "<h4>Curso:". $Curso."</h4><br>";
            echo "<h4>Asignatura:". $Asignatura."</h4><br>";
        ?>
    </body>
</html>