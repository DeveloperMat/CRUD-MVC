<?php

class ControladorFormularios
{

    /*REGISTRO */
    static function ctrRegistro()
    {

        if (isset($_POST['registroNombre'])) {
            $tabla = "registros";

            $datos = array(
                "nombre" => $_POST['registroNombre'],
                "email" => $_POST['registroEmail'],
                "password" => $_POST['registroPassword']
            );

            $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

            return $respuesta;
        };
    }

    /*SELECCIONAR REGISTROS */
    static public function ctrSeleccionarRegistros($item, $valor)
    {
        $tabla = "registros";

        $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

        return $respuesta;
    }

    /*INGRESO */
    function ctrIngreso()
    {
        if (isset($_POST['ingresoEmail'])) {
            $tabla = "registros";
            $item = "email";
            $valor = $_POST['ingresoEmail'];

            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);


            if ($respuesta['email'] == $_POST['ingresoEmail'] && $respuesta['password'] == $_POST['ingresoPassword']) {

                $_SESSION["validarIngreso"] = "ok";

                echo '<script>
                if(window.history.replaceState) {
                    window.history.replaceState(null,null,window.location.href);
                }
                window.location = "index.php?pagina=inicio";
             </script>';
            } else {
                echo '<script>
                if(window.history.replaceState) {
                    window.history.replaceState(null,null,window.location.href);
                }
             </script>';
                echo '<div class="alert alert-danger">Error al ingresar el sistema, el usuario o la contraseña no coincide</div>';
            }
        }
    }

    /* Actualizar registro */
    static public function ctrActualizarRegistro()
    {

        if (isset($_POST['actualizarNombre'])) {
            if ($_POST['actualizarPassword'] != "") {
                $password = $_POST['actualizarPassword'];
            } else {
                $password = $_POST['passwordActual'];
            }

            $tabla = "registros";


            $datos = array(
                "id" => $_POST['idUsuario'],
                "nombre" => $_POST['actualizarNombre'],
                "email" => $_POST['actualizarEmail'],
                "password" => $password
            );

            $respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);
            

            return $respuesta;
        }
    }

    /* Eliminar registro */
    public function ctrEliminarRegistro(){
        
        if(isset($_POST['eliminarRegistro']))
        {
            $tabla = "registros";
            $valor = $_POST['eliminarRegistro'];

            $respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);
             
            if($respuesta == "ok"){
                echo '<script>
                if(window.history.replaceState) {
                    window.history.replaceState(null,null,window.location.href);
                }

                window.location = "index.php?pagina=inicio";
             </script>';
            }
        }
    }







}//END CLASS
