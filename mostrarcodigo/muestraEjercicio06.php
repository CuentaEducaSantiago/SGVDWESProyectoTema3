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
        <header><h1>Codigo ejercicio 6</h1></header>
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
                        <h3><span style="color: #007700">date_default_timezone_set("Europe/Madrid");</span></h3>
                        <h3><span style="color: #007700">$fechaActual</span><span style="color: #DD0000"> = new DateTime();</span></h3>
                        <h3><span style="color: #007700">echo</span><span style="color: #DD0000"> "&lt;h2&gt;Operaciones con fechas&lt;/h2&gt;";</span></h3>
                        <h3><span style="color: #007700">echo</span><span style="color: #DD0000"> "Fecha actual: " . $fechaActual-&gt;format('d/m/Y') . "&lt;br&gt;";</span></h3>
                        <h3><span style="color: #007700">echo</span><span style="color: #DD0000"> "Día de la semana: ".$fechaActual-&gt;format('l')."&lt;br&gt;";</span></h3>
                        <h3><span style="color: #007700">$fechaFutura</span><span style="color: #DD0000"> = $fechaActual-&gt;modify('+60 days');</span></h3>
                        <h3><span style="color: #007700">echo</span><span style="color: #DD0000"> "Fecha dentro de 60 días: ".$fechaFutura-&gt;format('d/m/Y')."&lt;br&gt;";</span></h3>
                        <h3><span style="color: #007700">echo</span><span style="color: #DD0000"> "Día de la semana: ".$fechaFutura-&gt;format('l')."&lt;br&gt;";</span></h3>
                    <span style="color: #0000BB">?&gt;</span>
                </blockquote>
                    &lt;/body&gt;
            &lt;/html&gt;
            </code>
        </pre>
    </body>
</html>