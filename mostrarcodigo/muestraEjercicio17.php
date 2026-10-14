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
        <header><h1>Codigo ejercicio 17</h1></header>
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
                    <h3><span style="color: #007700">$teatro</span><span style="color: #DD0000"> = array_fill(0, 20, array_fill(0, 15, null));</span></h3>
                    <h3><span style="color: #007700">$teatro[0][0]</span><span style="color: #DD0000"> = "Juan";</span></h3>
                    <h3><span style="color: #007700">$teatro[0][1]</span><span style="color: #DD0000"> = "Ana";</span></h3>
                    <h3><span style="color: #007700">$teatro[2][5]</span><span style="color: #DD0000"> = "Pedro";</span></h3>
                    <h3><span style="color: #007700">$teatro[5][10]</span><span style="color: #DD0000"> = "Laura";</span></h3>
                    <h3><span style="color: #007700">$teatro[10][7]</span><span style="color: #DD0000"> = "Carlos";</span></h3>
                    <h3><span style="color: #007700">echo</span><span style="color: #DD0000"> "&lt;h2>Recorrido con FOREACH&lt;/h2>";</span></h3>
                    <h3><span style="color: #007700">foreach</span><span style="color: #DD0000"> ($teatro as $fila => $asientos) {</span></h3>
                        <h3><span style="color: #007700">foreach</span><span style="color: #DD0000"> ($asientos as $asiento => $persona) {</span></h3>
                            <h3><span style="color: #007700">if</span><span style="color: #DD0000"> ($persona != null) {</span></h3>
                                <h3><span style="color: #007700">echo</span><span style="color: #DD0000"> "&lt;h3&gt;Fila " . ($fila + 1).", asiento ".($asiento + 1).": ".$persona."&lt;/h3&gt;&lt;br&gt;";</span></h3>
                            <h3><span style="color: #007700">}</span></h3>
                        <h3><span style="color: #007700">}</span></h3>
                    <h3><span style="color: #007700">}</span></h3>
                    <h3><span style="color: #007700">echo</span><span style="color: #DD0000"> "&lt;h2&gt;Recorrido con WHILE&lt;/h2&gt;";</span></h3>
                    <h3><span style="color: #007700">$fila</span><span style="color: #DD0000"> = 0;</span></h3>
                    <h3><span style="color: #007700">while</span><span style="color: #DD0000"> ($fila < 20) {</span></h3>
                        <h3><span style="color: #007700">$asiento</span><span style="color: #DD0000"> = 0;</span></h3>
                        <h3><span style="color: #007700">while</span><span style="color: #DD0000"> ($asiento < 15) {</span></h3>
                            <h3><span style="color: #007700">if</span><span style="color: #DD0000"> ($teatro[$fila][$asiento] != null) {</span></h3>
                                <h3><span style="color: #007700">echo</span><span style="color: #DD0000"> "&lt;h3&gt;Fila ".($fila + 1).", asiento " . ($asiento + 1).": ".$teatro[$fila][$asiento]."&lt;/h3&gt;&lt;br&gt;";</span></h3>
                            <h3><span style="color: #007700">}</span></h3>
                            <h3><span style="color: #007700">$asiento++;</span></h3>
                        <h3><span style="color: #007700">}</span></h3>
                        <h3><span style="color: #007700">$fila++;</span></h3>
                    <h3><span style="color: #007700">}</span></h3>
                    <h3><span style="color: #007700">echo</span><span style="color: #DD0000"> "&lt;h2&gt;Recorrido con FOR&lt;/h2&gt;";</span></h3>
                    <h3><span style="color: #007700">for</span><span style="color: #DD0000"> ($fila = 0; $fila < 20; $fila++) {</span></h3>
                        <h3><span style="color: #007700">for</span><span style="color: #DD0000"> ($asiento = 0; $asiento < 15; $asiento++) {</span></h3>
                            <h3><span style="color: #007700">if</span><span style="color: #DD0000"> ($teatro[$fila][$asiento] != null) {</span></h3>
                                <h3><span style="color: #007700">echo</span><span style="color: #DD0000"> "&lt;h3&gt;Fila ".($fila + 1).", asiento ".($asiento + 1).": ".$teatro[$fila][$asiento]."&lt;/h3&gt;&lt;br&gt;";</span></h3>
                            <h3><span style="color: #007700">}</span></h3>
                        <h3><span style="color: #007700">}</span></h3>
                    <h3><span style="color: #007700">}</span></h3>
                </blockquote>    &lt;/body&gt;
            &lt;/html&gt;
            </code>
        </pre>
    </body>
</html>