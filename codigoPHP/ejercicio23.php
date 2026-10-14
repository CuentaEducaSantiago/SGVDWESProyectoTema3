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
        <h2><a href='../indexProyectoTema3.php'>volver</a></h2>
        <?php
        require_once '../core/231018libreriaValidacion.php';

        // Inicializacion de variables
        $entradaOK = true; // Variable que nos indica que todo va bien.
        $aErrores = ['nombre' => '', 'curso' => '']; //ARRAY Errores
        $aRespuestas = ['nombre' => '', 'curso' => '']; //ARRAY Respuestas correctas
        if (isset($_POST['enviar'])) {

            // Validacion 
            $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'], 100, 0, 1);
            $aErrores['curso'] = validacionFormularios::comprobarAlfabetico($_REQUEST['curso'], 150, 0, 1);

            foreach ($aErrores as $campo) {
                if (!emty($campo)) {
                    $entradaOk = false;
                }
            }
        } else {
            $entradaOK = false;
        }
        if ($entradaOK) {
            $aRespuestas['nombre']=$_REQUEST['nombre'];
            $aRespuestas['curso']=$_REQUEST['curso'];
            foreach ($aRespuestas as $campos => $texto){
                echo '<h4>El '.$campos.' es: '.$texto.'</h4><br>';
            }
            echo "<br><a href='" . $_SERVER['PHP_SELF'] . "'>⬅ Rellenar otro formulario</a>";
        }
        else{
        ?> 
        <form name="input" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <label for="nombre" >Nombre:</label> <input type="text" name="nombre" value="<?php echo htmlspecialchars($_POST['nombre'] ?? ''); ?>" required>
            <?php
            if ($aErrores['nombre'] != '') {
                echo "<p><span style='color:red;'>" . $aErrores['nombre'] . "</span></p>";
            }
            ?>
            <br>

            <label for="curso" >Curso:</label> <input type="text" name="curso" value="<?php echo htmlspecialchars($_POST['curso'] ?? ''); ?>" required>
            <?php
            if ($aErrores['curso'] != '') {
                echo "<span style='color:red;'>" . $aErrores['apellidos'] . "</span>";
            }
            ?>
            <br>

            <p><input type="submit" name="enviar" value="Enviar"/></p>
        </form>
        <?php } ?>
    </body>
</html>