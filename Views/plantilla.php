<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--FONTAWESOME 4.7-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- BOOTSTRAP4-->
    <link rel="stylesheet" href="Views/css/bootstrap.min.css">
    <title>MVC</title>
</head>

<body>

    <!-- LOGO -->
    <div class="container-fluid">
        <h3 class="text-center py-3">LOGO</h3>
    </div>  

    <!-- BOTONES-->
    <!-- GET: $_GEt["variables"] quese pasan como parametros Via URL (Tambíén como cadena de consulta a través de la URL) Cuando es la primera variable se separa con ? las que siguen a continuación se separan con & -->
    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">

                <?php if (isset($_GET['pagina'])) : ?>

                    <?php if ($_GET['pagina'] == "registro") : ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=registro" class="nav-link active">Registro</a>
                        </li>

                    <?php else : ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=registro" class="nav-link">Registro</a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if (isset($_GET['pagina'])) : ?>

                    <?php if ($_GET['pagina'] == "ingreso") : ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=ingreso" class="nav-link active">Ingreso</a>
                        </li>

                    <?php else : ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=ingreso" class="nav-link">Ingreso</a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>


                <?php if (isset($_GET['pagina'])) : ?>

                    <?php if ($_GET['pagina'] == "inicio") : ?>
                        <li class="nav-item">
                        </li>
                            <a href="index.php?pagina=inicio" class="nav-link active">Inicio</a>


                    <?php else : ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=inicio" class="nav-link ">Inicio</a>
                        </li>

                    <?php endif; ?>
                    
                <?php endif; ?>


                <?php if (isset($_GET['pagina'])) : ?>

                    <?php if ($_GET['pagina'] == "salir") : ?>
                        <li class="nav-item">
                    <a href="index.php?pagina=salir" class="nav-link active">Salir</a>
                </li>

                    <?php else : ?>
                        <li class="nav-item">
                    <a href="index.php?pagina=salir" class="nav-link">Salir</a>
                </li>

                    <?php endif; ?>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=registro" class="nav-link active">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?pagina=ingreso" class="nav-link">Ingreso</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?pagina=inicio" class="nav-link">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?pagina=salir" class="nav-link">Salir</a>
                        </li>

                <?php endif; ?>

            </ul>
        </div>
    </div>

    <!-- CONTENIDO -->
    <div class="container-fluid py-5">
        <div class="conainer">
            <?php
            #ISSET: isset() Determina si una variable está definida y no es NULL
            if (isset($_GET['pagina'])) {
                if ($_GET['pagina'] == 'registro' || $_GET['pagina'] == 'ingreso' || $_GET['pagina'] == 'inicio' || $_GET['pagina'] == 'editar' || $_GET['pagina'] == 'salir') {
                    include "Pages/" . $_GET["pagina"] . ".php";
                }else {
                    include "Pages/error404.php";
                }
            } else {
                include "Pages/inicio.php";
            }
            ?>

        </div>
    </div>


    <script src="Views/jquery-3.4.1.min.js"></script>
    <script src="Views/js/bootstrap.min.js"></script>
</body>

</html>