<?php
if (isset($_GET['id'])) {
    $item = "id";
    $valor = $_GET['id'];

    $usuario = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
}
?>
<div class="d-flex justify-content-center text-center">
    <form class="p-5 bg-light" action="" method="POST">
        <div class="form-group">

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i>

                    </span>
                </div>
                <input type="text" name="actualizarNombre" id="nombre" class="form-control" placeholder="Escriba su nombre" value="<?php echo $usuario['nombre'] ?>">
            </div>
        </div>

        <div class="form-group">

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                <input type="email" name="actualizarEmail" id="email" class="form-control" placeholder="Escriba su email" value="<?php echo $usuario['email'] ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i>

                    </span>
                </div>
                <input type="password" name="actualizarPassword" id="pwd" class="form-control" placeholder="Escriba su contraseña">
                <input type="hidden" name="passwordActual" value="<?php echo $usuario['password'] ?>">
                <input type="hidden" name="idUsuario" value="<?php echo $usuario['id'] ?>">
            </div>
        </div>
        <?php

        $actualizar = ControladorFormularios::ctrActualizarRegistro();
        if ($actualizar == "ok") {
            echo '<script>
            if(window.history.replaceState) {
                window.history.replaceState(null,null,window.location.href);
            }
         </script>';

            echo '<div class="alert alert-success">El usuario ha sido actualizado</div>
            
            <script>
                setTimeout(function(){
                    window.location = "index.php?pagina=inicio";
                },1500);
            </script>
            
            ';  
        }

        ?>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>