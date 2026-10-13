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
        function diasyprecios($array) {
            $t=0;
            foreach($array  as $dia => $pago){
                print "<li>".$dia." recibe ".$pago."</li>";
                $t+=$pago;
            }
            return $t;
        }
        $Semana = array("Lunes"=> 80, "Martes"=> 20, "Miercoles"=> 70, "Jueves"=> 80, "Viernes"=> 180, "Sabado"=> 80, "Domingo"=> 8);
        $total =diasyprecios($Semana);
        print "<h3>Pago total= ".$total."</h3>"
        ?>
    </body>
</html>
