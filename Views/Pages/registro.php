<div class="d-flex justify-content-center text-center">
    <form class="p-5 bg-light" action="" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i>

                    </span>
                </div>
                <input type="text" name="registroNombre" id="nombre" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="correo">Correo:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                <input type="email" name="registroEmail" id="email" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i>

                    </span>
                </div>
                <input type="password" name="registroPassword" id="pwd" class="form-control">
            </div>
        </div>
        <?php

        /* FORMA EN LA QUE SE INSTANCIA LA CLASE DE UN METODO NO ESTATICO */

        // $registro = new ControladorFormularios();
        // $registro->ctrRegistro();

        /* FORMA EN LA QUE SE INSTANCIA LA CLASE DE UN METODO ESTATICO */

        $registro = ControladorFormularios::ctrRegistro();

        if ($registro == "ok") {
            echo '<script>
            if(window.history.replaceState) {
                window.history.replaceState(null,null,window.location.href);
            }
         </script>';
            echo '<div class="alert alert-success">El usuario ha sido registrado</div>';
        }

        ?>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>