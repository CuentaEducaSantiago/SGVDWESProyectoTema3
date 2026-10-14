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
        <header><h1>Codigo ejercicio 12</h1></header>
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
                        <h3><span style="color: #007700">$superglobales </span><span style="color: #DD0000">= array('_SERVER'  => $_SERVER, '_GET'=> $_GET, '_POST'=> $_POST,'_FILES'=> $_FILES, '_COOKIE'=> $_COOKIE, '_SESSION'=> $_SESSION, '_ENV'=> $_ENV);</span></h3>
                        <h3><span style="color: #007700">print_r</span><span style="color: #DD0000">("&lt;?h1&gt;print_r&lt;?/h1&gt;");</span></h3>
                        <h3><span style="color: #DD0000">foreach($superglobales as $value=>$global){</span></h3>
                        <h3><span style="color: #007700">echo</span><span style="color: #DD0000">$value."= ";</span></h3>
                        <h3><span style="color: #007700">print_r</span><span style="color: #DD0000">($global);</span></h3>
                        <h3><span style="color: #DD0000">echo("&lt;<br&gt;");</span></h3>
                        <h3><span style="color: #DD0000">}</span></h3>
                    </span><span style="color: #0000BB">?&gt;</span>
                </blockquote>    &lt;/body&gt;
            &lt;/html&gt;
            </code>
        </pre>
    </body>
</html>