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
        $Phtml = array("Head"=> "meta", "title","link","styles", "Body"=> "header", "main", "h1", "h2", "h3", "h4", "p", "a", "footer");
        print_r("<h1>print_r</h1>");
        foreach($Phtml as $value){
            print_r($value);
            print(" ");
        }
        ?>
    </body>
</html>