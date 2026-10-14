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
        <style>
            form{
                display: block;
            }
        </style>
    </head>
    <body>
        <h2><a href='../indexProyectoTema3.php'>volver</a></h2>
        <?php
            if (isset($_REQUEST['submit'])){//cuando se ha dado a submit
                $nombre= $_REQUEST['Nombre'];//recoge el texto introducido en el campo nombre
                $curso= $_REQUEST['Curso'];//recoge el texto introducido en el campo curso
                echo '<div>';
                echo "<h4>Nombre:".$nombre."</h4><br>";//muestra el nombre introducido
                echo "<h4>Curso:".$curso."</h4><br>";//muestra el curso introducido
                echo '</div>';
                echo "<br><a href='" . $_SERVER['PHP_SELF'] . "'>⬅ Rellenar otro formulario</a>";//para hacer de nuevo el formulario y que desaparezca el texto del anterior
            }
        ?>
        <form name="ejer21" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="nombre" >Nombre: </label><input type="text" id="nom" name="Nombre"/><br>
            <label for="Curso" >Curso: </label><input type="text" id="cur" name="Curso"/><br>
            <input type="submit" name="submit" id="enviar"/>
        </form>
    </body>
</html>