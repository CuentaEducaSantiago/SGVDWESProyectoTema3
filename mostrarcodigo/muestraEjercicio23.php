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
        <header><h1>Codigo ejercicio 23</h1></header>
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
&lt;nav&gt;
                        &lt;h2&gt;DWES - Tema 3&lt;/h2&gt;
                        &lt;h2&gt;Ejercicio 23&lt;/h2&gt;
                    &lt;/nav&gt;
                    &lt;main&gt;
                        &lt;div class="ejercicio"&gt;
                            <h3><span style="color: #DD0000">&lt;?php</span></h3>
                                <h3><span style="color: #DD0000">ini_set('display_errors', 1);</span></h3>
                                <h3><span style="color: #DD0000">ini_set('display_startup_errors', 1);</span></h3>
                                <h3><span style="color: #DD0000">error_reporting(E_ALL);</span></h3>

                            <h3><span style="color: #DD0000">?&gt;</span></h3>
                            <h3><span style="color: #DD0000">&lt;?php</span></h3>
                                <h3><span style="color: #DD0000"> // importación de la librería</span></h3>
                                <h3><span style="color: #DD0000"> require_once  '../core/231018libreriaValidacion.php';</span></h3>

                                <h3><span style="color: #DD0000">// Inicialización de variables</span></h3>
                                <h3><span style="color: #DD0000">$entradaOk = true; // Variable que nos indica que todo va bien</span></h3>
                                <h3><span style="color: #DD0000">$aErrores = [</span></h3>
                                <h3><span style="color: #DD0000">    'nombre' =&gt; '',</span></h3>
                                <h3><span style="color: #DD0000">    'fecha' =&gt; '',</span></h3>
                                <h3><span style="color: #DD0000">    'sueldo' =&gt; ''</span></h3>
                                <h3><span style="color: #DD0000">]; // Array donde recogemos los mensajes de error</span></h3>
                                <h3><span style="color: #DD0000">$aRespuestas = [</span></h3>
                                <h3><span style="color: #DD0000">    'nombre' =&gt; '',</span></h3>
                                <h3><span style="color: #DD0000">    'fecha' =&gt; '',</span></h3>
                                <h3><span style="color: #DD0000">    'sueldo' =&gt; ''</span></h3>
                                <h3><span style="color: #DD0000">]; // Array donde recogeremos las respuestas correctas (si $entradaOK)</span></h3>

                                <h3><span style="color: #DD0000">// Cargar valores por defecto en los campos del formulario</span></h3>
                                <h3><span style="color: #DD0000">// (Los valores por defecto ya están vacíos en $aRespuestas)</span></h3>

                                <h3><span style="color: #DD0000">// Para cada campo del formulario: Validar entrada y actuar en consecuencia</span></h3>
                                <h3><span style="color: #DD0000">if(isset($_POST["submit"])){</span></h3>
                                <h3><span style="color: #DD0000">    // Validamos los datos para cada campo del formulario.</span></h3>
                                <h3><span style="color: #DD0000">    $aRespuestas['nombre'] = $_POST['Inombre'] ?? '';</span></h3>
                                <h3><span style="color: #DD0000">    $aRespuestas['fecha'] = $_POST['fechaN'] ?? '';</span></h3>
                                <h3><span style="color: #DD0000">    $aRespuestas['sueldo'] = $_POST['sueldoS'] ?? '';</span></h3>
                                <h3><span style="color: #DD0000">    $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($aRespuestas['nombre'],100,0,1);</span></h3>
                                <h3><span style="color: #DD0000">    $aErrores['fecha'] = validacionFormularios::validarFecha($aRespuestas['fecha'],"01/01/2027","01/01/1900", 1);</span></h3>
                                <h3><span style="color: #DD0000">    $aErrores['sueldo'] = validacionFormularios::comprobarFloat($aRespuestas['sueldo'], 10000, 0, 1);</span></h3>

                                <h3><span style="color: #DD0000">    // Recorremos el array de errores para comprobar si ha habido alguno.</span></h3>
                                <h3><span style="color: #DD0000">    // true: la variable booleana $entradaOk recibe el valor false.</span></h3>
                                <h3><span style="color: #DD0000">    foreach ($aErrores as $campo =&gt; $valor) {</span></h3>
                                <h3><span style="color: #DD0000">        if($valor !== null){</span></h3>
                                <h3><span style="color: #DD0000">            $entradaOk = false;</span></h3>
                                <h3><span style="color: #DD0000">        }</span></h3>
                                <h3><span style="color: #DD0000">    }</span></h3>
                                <h3><span style="color: #DD0000">} else{</span></h3>
                                <h3><span style="color: #DD0000">    $entradaOk = false;        // Si el formulario no se ha rellenado nunca.</span></h3>
                                <h3><span style="color: #DD0000">}</span></h3>

                                <h3><span style="color: #DD0000">// Tratamiento del formulario</span></h3>
                                <h3><span style="color: #DD0000">if($entradaOk){</span></h3>
                                <h3><span style="color: #DD0000">    //En caso de que el formulario haya sido rellenado de manera correcta.</span></h3>

                                <h3><span style="color: #DD0000">    $aRespuestas['nombre'] = $_POST['Inombre'];       // Añadir al campo nombre el valor enviado desde el formulario.</span></h3>
                                <h3><span style="color: #DD0000">    $aRespuestas['fecha'] = $_POST['fechaN'];         // Añadir al campo fecha el valor introducido en el formulario.</span></h3>
                                <h3><span style="color: #DD0000">    $aRespuestas['sueldo'] = $_POST['sueldoS'];       // Añadir al campo sueldo el valor introducido en el formulario.</span></h3>

                                <h3><span style="color: #DD0000">    // Recorremos el array de respuestas con un foreach para mostrar las respuestas.</span></h3>

                                <h3><span style="color: #DD0000">    foreach ($aRespuestas as $campo =&gt; $valor) {</span></h3>
                                <h3><span style="color: #DD0000">        print("&lt;p&gt;Su $campo es: ".$valor."&lt;/p&gt;&lt;br&gt;");</span></h3>
                                <h3><span style="color: #DD0000">    }</span></h3>
                                <h3><span style="color: #DD0000">} else{</span></h3>
                            <h3><span style="color: #DD0000">?&gt;</span></h3>

                            <h3><span style="color: #DD0000">&lt;!-- Mostrar formulario --&gt;</span></h3>
                            <h3><span style="color: #DD0000">&lt;form name="input" action="&lt;?php echo $_SERVER['PHP_SELF']; ?&gt;" method="post"&gt;</span></h3>

                                <h3><span style="color: #DD0000">&lt;!-- Mostrar los datos tecleados correctamente en intentos anteriores (en los value) --&gt;</span></h3>
                                <h3><span style="color: #DD0000">Nombre: &lt;input type="text" name="Inombre" value="&lt;?php echo htmlspecialchars($aRespuestas['nombre']); ?&gt;"/&gt;</span></h3>
                                <h3><span style="color: #DD0000">&lt;?php</span></h3>
                                <h3><span style="color: #DD0000">// Mostrar mensajes de error (si los hay y el formulario no se muestra por primera vez)</span></h3>
                                <h3><span style="color: #DD0000">if(!empty($aErrores['nombre'])) {echo "&lt;span style='color:red; display:block; font-size:13px;'&gt;{$aErrores['nombre']}&lt;/span&gt;";}</span></h3>
                                <h3><span style="color: #DD0000">?&gt;</span></h3>
                                <h3><span style="color: #DD0000">&lt;br&gt;</span></h3>

                                <h3><span style="color: #DD0000">Fecha de nacimiento: &lt;input type="date" name="fechaN" value="&lt;?php echo htmlspecialchars($aRespuestas['fecha']); ?&gt;"/&gt;</span></h3>
                                <h3><span style="color: #DD0000">&lt;?php</span></h3>
                                <h3><span style="color: #DD0000">if(!empty($aErrores['fecha'])) {echo "&lt;span style='color:red; display:block; font-size:13px;'&gt;{$aErrores['fecha']}&lt;/span&gt;";}</span></h3>
                                <h3><span style="color: #DD0000">?&gt;</span></h3>
                                <h3><span style="color: #DD0000">&lt;br&gt;</span></h3>

                                <h3><span style="color: #DD0000">Sueldo mensual: &lt;input type="number" name="sueldoS" min="0" value="&lt;?php echo htmlspecialchars($aRespuestas['sueldo']); ?&gt;" step="any"/&gt;</span></h3>
                                <h3><span style="color: #DD0000">&lt;?php</span></h3>
                                <h3><span style="color: #DD0000">if(!empty($aErrores['sueldo'])) {echo "&lt;span style='color:red; display:block; font-size:13px;'&gt;{$aErrores['sueldo']}&lt;/span&gt;";}</span></h3>
                                <h3><span style="color: #DD0000">?&gt;</span></h3>
                                <h3><span style="color: #DD0000">&lt;br&gt;</span></h3>

                                <h3><span style="color: #DD0000">&lt;input type="submit" name="submit" value="Enviar"/&gt;</span></h3>
                            <h3><span style="color: #DD0000">&lt;/form&gt;</span></h3>

                            <h3><span style="color: #DD0000">&lt;?php</span></h3>
                                <h3><span style="color: #DD0000">} // Fin si ($entradaOK)</span></h3>
                            <h3><span style="color: #DD0000">?&gt;</span></h3>
                        &lt;/div&gt;
                    &lt;/main&gt;
                    &lt;footer&gt;
                        &lt;div&gt;
                            &lt;a href="../indexProyectoTema3.php" color="white"&gt;Santiago González Vicente&lt;/a&gt;
                            &lt;time datetime="2026-10-13"&gt;13-10-2026&lt;/time&gt;
                        &lt;/div&gt;
                    &lt;/footer&gt;
                &lt;/body&gt;
            &lt;/html&gt;
            </code>
        </pre>
    </body>
</html>