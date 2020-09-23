<div class="d-flex justify-content-center text-center">
    <form class="p-5 bg-light" action="" method="POST">
        <div class="form-group">
            <label for="correo">Correo:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                <input type="email" name="ingresoEmail" id="email" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i>

                    </span>
                </div>
                <input type="password" name="ingresoPassword" id="pwd" class="form-control">
            </div>
        </div>
        <?php

        /* FORMA EN LA QUE SE INSTANCIA LA CLASE DE UN METODO NO ESTATICO */

        // $registro = new ControladorFormularios();
        // $registro->ctrRegistro();

        /* FORMA EN LA QUE SE INSTANCIA LA CLASE DE UN METODO ESTATICO */

        $ingreso = new ControladorFormularios();
        $ingreso -> ctrIngreso();

        ?>
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
</div>