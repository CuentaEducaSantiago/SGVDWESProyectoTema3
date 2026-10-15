<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 23</title>
        <style>
            input[type="text"],input[type="date"],input[type="number"]{ background-color: #fff9c4; }
            *{ margin: 0 auto; padding: 0 auto; }
            nav{ background-color: black; color: white; }
            span{ color: red; }
            .ejercicio{
                padding: 50px;
                margin-top: 10px;
                margin-bottom: 10px;
                width: 1150px;
                border: 1px solid black;
                border-radius: 10px;
                p { font-weight: bold; }
            }
            footer{
                background-color: black; text-align: center; align-content: center;
                height: 50px; color: white; margin-top: 20%;
                & div a{ color: white; text-decoration: none; }
            }
        </style>
    </head>
    <body>
        <nav>
            <h2>DWES - Tema 3</h2>
            <h2>Ejercicio 23</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                
                    ini_set('display_errors', 1);
                    ini_set('display_startup_errors', 1);
                    error_reporting(E_ALL);
                    
                ?>
                <?php
                /**
                     * @author Álvaro Calderón Pérez
                     * @since 13-10-2026
                     *  Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
                        recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente.

                     */
                     
                     // importación de la librería
                     require_once  '../core/231018libreriaValidacion.php';
                     
                    // Inicialización de variables
                    $entradaOk = true; // Variable que nos indica que todo va bien
                    $aErrores = [
                        'nombre' => '',
                        'fecha' => '',
                        'sueldo' => ''
                    ]; // Array donde recogemos los mensajes de error
                    $aRespuestas = [
                        'nombre' => '',
                        'fecha' => '',
                        'sueldo' => ''
                    ]; // Array donde recogeremos las respuestas correctas (si $entradaOK)

                    // Cargar valores por defecto en los campos del formulario
                    // (Los valores por defecto ya están vacíos en $aRespuestas)

                    // Para cada campo del formulario: Validar entrada y actuar en consecuencia
                    if(isset($_POST["submit"])){
                        // Validamos los datos para cada campo del formulario.
                        $aRespuestas['nombre'] = $_POST['Inombre'] ?? '';
                        $aRespuestas['fecha'] = $_POST['fechaN'] ?? '';
                        $aRespuestas['sueldo'] = $_POST['sueldoS'] ?? '';
                        $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($aRespuestas['nombre'],100,0,1);
                        $aErrores['fecha'] = validacionFormularios::validarFecha($aRespuestas['fecha'],"01/01/2027","01/01/1900", 1);
                        $aErrores['sueldo'] = validacionFormularios::comprobarFloat($aRespuestas['sueldo'], 10000, 0, 1);

                        // Recorremos el array de errores para comprobar si ha habido alguno.
                        // true: la variable booleana $entradaOk recibe el valor false.
                        foreach ($aErrores as $campo => $valor) {
                            if($valor !== null){
                                $entradaOk = false;
                            }
                        }
                    } else{
                        $entradaOk = false;        // Si el formulario no se ha rellenado nunca.
                    }

                    // Tratamiento del formulario
                    if($entradaOk){
                        //En caso de que el formulario haya sido rellenado de manera correcta.

                        $aRespuestas['nombre'] = $_POST['Inombre'];       // Añadir al campo nombre el valor enviado desde el formulario.
                        $aRespuestas['fecha'] = $_POST['fechaN'];         // Añadir al campo fecha el valor introducido en el formulario.
                        $aRespuestas['sueldo'] = $_POST['sueldoS'];       // Añadir al campo sueldo el valor introducido en el formulario.

                        // Recorremos el array de respuestas con un foreach para mostrar las respuestas.

                        foreach ($aRespuestas as $campo => $valor) {
                            print("<p>Su $campo es: ".$valor."</p><br>");
                        }
                    } else{
                ?>
                
                <!-- Mostrar formulario -->
                <form name="input" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    
                    <!-- Mostrar los datos tecleados correctamente en intentos anteriores (en los value) -->
                    Nombre: <input type="text" name="Inombre" value="<?php echo htmlspecialchars($aRespuestas['nombre']); ?>"/>
                    <?php
                    // Mostrar mensajes de error (si los hay y el formulario no se muestra por primera vez)
                    if(!empty($aErrores['nombre'])) {echo "<span style='color:red; display:block; font-size:13px;'>{$aErrores['nombre']}</span>";}
                    ?>
                    <br>
                
                    Fecha de nacimiento: <input type="date" name="fechaN" value="<?php echo htmlspecialchars($aRespuestas['fecha']); ?>"/>
                    <?php
                    if(!empty($aErrores['fecha'])) {echo "<span style='color:red; display:block; font-size:13px;'>{$aErrores['fecha']}</span>";}
                    ?>
                    <br>
                
                    Sueldo mensual: <input type="number" name="sueldoS" min="0" value="<?php echo htmlspecialchars($aRespuestas['sueldo']); ?>" step="any"/>
                    <?php
                    if(!empty($aErrores['sueldo'])) {echo "<span style='color:red; display:block; font-size:13px;'>{$aErrores['sueldo']}</span>";}
                    ?>
                    <br>
                    
                    <input type="submit" name="submit" value="Enviar"/>
                </form>
                
                <?php
                    } // Fin si ($entradaOK)
                ?>
            </div>
        </main>
        <footer>
            <div>
                <a href="../indexProyectoTema3.php" color="white">Álvaro Calderón Pérez</a>
                <time datetime="2026-10-13">13-10-2026</time>
            </div>
        </footer>
    </body>
</html>