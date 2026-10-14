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
        $superglobales = array('_SERVER'  => $_SERVER, '_GET'=> $_GET, '_POST'=> $_POST,'_FILES'=> $_FILES, '_COOKIE'=> $_COOKIE, '_SESSION'=> $_SESSION, '_ENV'=> $_ENV);
        print_r("<h1>print_r</h1>");
        foreach($superglobales as $value=>$global){
            echo $value."= ";
            print_r($global);
            echo ("<br>");
        }
        ?>
    </body>
</html>