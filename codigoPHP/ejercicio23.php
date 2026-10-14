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
        <?php require_once '../core/231018libreriaValidacion.php'; ?>
        <style>
            input{
                margin: 10px 5px;
            }
            #nombre,#fechaNacimiento,#apellido{
                background-color: #fffce0;
                border:1px solid black;
            }
            /* Remove arrows for Chrome, Safari, Edge, and Opera */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
            }
            /* Remove arrows for Firefox */
            input[type=number] {
                -moz-appearance: textfield;
            }
        </style>
    </head>
    <body>
        <h2><a href='../indexProyectoTema3.php'>volver</a></h2>
        <?php
            //Inicializacion de variables
            $entradaOK = true; // Variable que nos indica que todo va bien
            //Array donde recogemos los mensajes de error
            $aError = [
                'nombre' => "",
                'apellido' => "",
                'fechaNacimiento' => ""];
            //Array donde recogemos la respuestas correctas
            $aRespuesta = [
                'nombre' => "",
                'apellido' => "",
                'fechaNacimiento' => ""];

            // Comprueba si el formulario se a enviado
            if (isset($_POST["enviar"])) {
                // Validar Entrada
                // $oFechaHoraActual= new DateTime();
                //$oFechaHoraActual->format("d/m/Y")
                
                $aError["nombre"] = validacionFormularios::comprobarAlfabetico($_POST["nombre"],1000,1,1);
                $aError["apellido"] = validacionFormularios::comprobarAlfabetico($_POST["apellido"],1000,1,1);
                $aError["fechaNacimiento"] = validacionFormularios::validarFecha($_POST["fechaNacimiento"],"01/01/2027","01/01/1900", 1);

                foreach ($aError as $value) {
                    if (!empty($value)) {
                        $entradaOK = false;
                    }
                }
            }
            // El formulario no se ha enviado nunca
            else {
                $entradaOK = false;
            }

            if ($entradaOK) {
                //Cargar la variable $aRespuestas y tratamiento de datos OK
                $aRespuesta["nombre"] = htmlspecialchars($_POST["nombre"]);
                $aRespuesta["apellido"] = htmlspecialchars($_POST["apellido"]);
                $aRespuesta["fechaNacimiento"] = htmlspecialchars($_POST["fechaNacimiento"]);

                $oFechaNacimientoDateTime = new DateTime($aRespuesta["fechaNacimiento"]);

                echo '<h3> Formulario Tratamiento</h3>';
                echo '<p>Nombre: ' . $aRespuesta["nombre"] . '</p>';
                echo '<p>Apellido: ' . $aRespuesta["apellido"] . '</p>';
                echo '<p>Fecha de Nacimiento: ' . $oFechaNacimientoDateTime->format("d/m/Y") . '</p>';
            } else {
                // Mostrar Formulario
                ?>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" name="formulario" method="post" novalidate>
                    <h3>Formulario: Tratamiento</h3>
                    <label for="nombre" >Nombre:</label>
                    <input type="text" name="nombre" id="nombre"/>
                    <?php
                    if (!empty($aError["nombre"])) {
                        echo "<span style='color:red;'>" . $aError['nombre'] . "</span>";
                    }
                    ?>
                    <br/>
                    <label for="apellido" >Apellido:</label>
                    <input type="text" name="apellido" id="apellido"/>
                    <?php
                    if (!empty($aError["apellido"])) {
                        echo "<span style='color:red;'>" . $aError['apellido'] . "</span>";
                    }
                    ?>
                    <br/>
                    <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                    <input type="date" name="fechaNacimiento" id="fechaNacimiento" value=/>
                    <?php
                    if (!empty($aError["fechaNacimiento"])) {
                        echo "<span style='color:red;'>" . $aError['fechaNacimiento'] . "</span>";
                    }
                    ?>
                    <br/>
                    <input type="submit" name="enviar" id="enviar"/>
                </form>  
                <?php
            }
            ?>
    </body>
</html>