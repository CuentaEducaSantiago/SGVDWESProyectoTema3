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
        <header><h1>Codigo ejercicio 16</h1></header>
        <h1><a href='../indexProyectoTema3.php'>volver</a></h1>
        <pre>
            <code style="color: #000000">&lt;!DOCTYPE html&gt;
            &lt;!--
            Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
            Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
            --&gt;
            &lt;html&gt;
                &lt;head&gt;
                    &lt;meta charset="UTF-8"&gt;
                    &lt;title&gt;&lt;/title&gt;
                &lt;/head&gt;
                &lt;body&gt;
                <blockquote>
                    <span style="color: #0000BB">&lt;?php</span>
                        <h3><span style="color: #007700">function diasyprecios($array)</span><span style="color: #DD0000">{</span></h3>
                        <h3><span style="color: #007700">$total</span><span style="color: #DD0000"> =0;</span></h3>
                        <h3><span style="color: #DD0000">foreach($Semana  as $dia => $pago){</span></h3>
                        <h3><span style="color: #007700">print</span><span style="color: #DD0000"> "&lt;h3&gt;".$dia." recibe ".$pago."&lt;/h3&gt;&lt;br&gt;";</span></h3>
                        <h3><span style="color: #DD0000">$total</span><span style="color: #DD0000">+=$pago;</span></h3>
                        <h3><span style="color: #DD0000">}</span></h3>
                        <h3><span style="color: #007700">$Semana </span><span style="color: #DD0000">= array("Lunes"=> 80, "Martes"=> 20, "Miercoles"=> 70, "Jueves"=> 80, "Viernes"=> 180, "Sabado"=> 80, "Domingo"=> 8);;</span></h3>
                        <h3><span style="color: #007700">$total</span><span style="color: #DD0000">  =diasyprecios($Semana);</span></h3>
                        <h3><span style="color: #DD0000">print</span><span style="color: #DD0000"> "&lt;h3&gt;Pago total= ".$total."&lt;/h3&gt;"</span></h3>
                    </span><span style="color: #0000BB">?&gt;</span>
                </blockquote>    &lt;/body&gt;
            &lt;/html&gt;
            </code>
        </pre>
    </body>
</html>