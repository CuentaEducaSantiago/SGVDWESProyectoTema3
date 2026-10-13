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
        <style>
            form{
                display: block;
            }
        </style>
    </head>
    <body>
        <!--
        -- Moisés Alberto Dominguez Cruz
        -- 12/10/2026
        -- 23. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
        -- recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente.
        -->
        <?php
        echo "<a href='../indexProyectoTema3.php' class='enlace-volver'>⬅ Volver al inicio</a><br>";

        require_once '../core/231018libreriaValidacion.php';

        // Inicializacion de variables
        $entradaOK = true; // Variable que nos indica que todo va bien.
        $aErrores = ['nombre' => '', 'curso' => '']; //ARRAY Errores
        $aRespuestas = ['nombre' => '', 'curso' => '']; //ARRAY Respuestas correctas
        if (isset($_POST['enviar'])) {

            // Validacion 
            $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'], 100, 0, 1);
            $aErrores['curso'] = validacionFormularios::comprobarAlfabetico($_REQUEST['curso'], 150, 0, 1);

            foreach ($aErrores as $campo => $valor) {
                if ($valor != null) {
                    $entradaOk = false;
                }
            }
        } else {
            $entradaOK = false;
        }

        if ($entradaOK) {
            foreach ($aRespuestas )print_r('El nombre es: ' . $aRespuestas['nombre']);
            echo '<br>';
        }
        ?>    

            <!-- Mostrar formulario -->
            <?php if(!isset($_POST['enviar'])): ?>
            <form name="input" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                Nombre: <input type="text" name="nombre" value=""/>
                <?php
                if ($aErrores['nombre'] != '') {
                    echo "<span style='color:red; display:block; font-size:13px;'>" . $aErrores['nombre'] . "</span>";
                }
                ?>
                <br>

                Curso: <input type="text" name="curso" value=""/>
                <?php
                if ($aErrores['curso'] != '') {
                    echo "<span style='color:red; display:block; font-size:13px;'>" . $aErrores['apellidos'] . "</span>";
                }
                ?>
                <br>

                <p><input type="submit" name="enviar" value="Enviar"/></p>
            </form>
            
    </body>
</html>