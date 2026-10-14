```php
<!DOCTYPE html>
<html lang="es">
    <!--
    Autor: Santiago González Vicente
    Fecha Modificación: 2026-10-12
    Descripción: Cuestionario DAW2
    -->

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Santiago González Vicente</title>

        <style>
            form {
                display: block;
            }
        </style>
    </head>

    <body>
        <!--
        Ejercicio 23:
        Construir un formulario para recoger un cuestionario
        y mostrar las preguntas y respuestas.
        Si hay errores, volver a mostrar el formulario.
        -->

        <?php
        echo "<a href='../indexProyectoTema3.php'
              class='enlace-volver'>⬅ Volver al inicio</a><br>";

        require_once '../core/231018libreriaValidacion.php';

        // Inicialización de variables
        $entradaOK = true;

        $aErrores = [
            'nombre' => '',
            'curso' => ''
        ];

        $aRespuestas = [
            'nombre' => '',
            'curso' => ''
        ];

        // Comprobar si se ha enviado el formulario
        if (isset($_POST['enviar'])) {

            // Recoger y validar los datos
            $aErrores['nombre'] =
                validacionFormularios::comprobarAlfabetico(
                    $_POST['nombre'] ?? '',
                    100,
                    1,
                    1
                );

            $aErrores['curso'] =
                validacionFormularios::comprobarAlfabetico(
                    $_POST['curso'] ?? '',
                    150,
                    1,
                    1
                );

            // Comprobar si hay errores
            foreach ($aErrores as $campo => $error) {
                if ($error != null) {
                    $entradaOK = false;
                }
            }

            // Si todo es correcto, guardar las respuestas
            if ($entradaOK) {
                $aRespuestas['nombre'] = $_POST['nombre'];
                $aRespuestas['curso'] = $_POST['curso'];
            }

        } else {
            $entradaOK = false;
        }

        // Mostrar las respuestas si todo es correcto
        if ($entradaOK) {

            echo "<h2>Respuestas del cuestionario</h2>";

            echo "El nombre es: " .
                htmlspecialchars($aRespuestas['nombre']);

            echo "<br>";
            echo "El curso es: " . htmlspecialchars($aRespuestas['curso']);

        } else {
        ?>

            <!-- Mostrar formulario -->
            <form name="input" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($_POST['nombre'] ?? ''); ?>">
                <?php
                if ($aErrores['nombre'] != '') {
                    echo "<span style='color:red; display:block; font-size:13px;'>". $aErrores['nombre'] . "</span>";
                }
                ?>
                <br>
                <label for="curso">Curso:</label>
                <input type="text" id="curso" name="curso" value="<?php echo htmlspecialchars($_POST['curso'] ?? ''); ?>">
                <?php
                if ($aErrores['curso'] != '') {
                    echo "<span style='color:red; display:block; font-size:13px;'>" . $aErrores['curso'] . "</span>";
                }
                ?>
                <br>
                <p>
                    <input type="submit" name="enviar" value="Enviar">
                </p>
            </form>
        <?php
        }
        ?>
    </body>
</html>
```