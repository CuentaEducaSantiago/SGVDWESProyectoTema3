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
        <header><h1>Codigo ejercicio 21</h1></header>
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
                    &lt;form name="ejer21" action="Tratamiento.php" method="post"&gt;
                        &lt;h3&gt;Nombre&lt;/h3&gt;&lt;input type="text" id="nom" name="Nombre"/&gt;&lt;br&gt;
                        &lt;h3&gt;Curso&lt;/h3&gt;&lt;input type="text" id="cur" name="Curso"/&gt;&lt;br&gt;
                        &lt;input type="submit" id="enviar"/&gt;
                    &lt;/form&gt;
                    <span style="color: #0000BB">&lt;?php{</span>
                        <h3><span style="color: #007700">if (isset($_REQUEST['submit']))</span><span style="color: #DD0000">{</span></h3>
                        <h3><span style="color: #007700">$Nombre</span><span style="color: #DD0000">= $_REQUEST['Nombre'];</span></h3>
                        <h3><span style="color: #007700">$Curso</span><span style="color: #DD0000">= $_REQUEST['Curso'];</span></h3>
                        <h3><span style="color: #007700">echo</span><span style="color: #DD0000">'&lt;div&gt;'</span></h3>
                        <h3><span style="color: #007700">echo</span><span style="color: #DD0000">"&lt;h4&gt;Nombre:". $Nombre."&lt;/h4&gt;&lt;br;&lt";</span></h3>
                        <h3><span style="color: #007700">echo</span><span style="color: #DD0000">"&lt;h4&gt;Curso:". $Curso."&lt;/h4&gt;&lt;br;&lt";</span></h3>
                        <h3><span style="color: #007700">echo</span><span style="color: #DD0000">'&lt;/div&gt;'</span></h3>
                        <h3><span style="color: #007700">echo</span><span style="color: #DD0000"> "&lt;br&gt;&lt;a href='" . $_SERVER['PHP_SELF'] . "'&gt;⬅ Rellenar otro formulario&lt;/a&gt;";
                        }
                    ?>
                &lt;/body&gt;
            &lt;/html&gt;
            </code>
        </pre>
    </body>
</html>