<?php
//EL INDEX: es donde mostraremos la salida de las vistas al usuario y también a traves de él enviaremos las distintas acciones que el usuario envíe al controlador.

#require() Establece que el código del archivo invocado es requerido, es decir, obligatorio para el funcionamento del progra,. Por ello, si el archivo especificado en la funcion require() no se encuentra saltará un eror "PHP fatal error" y el programa PHP se detendrá.

#La version require_once() funciona de la misma forma que sus respectivo, salvo que, al utilizar la versión _once, se impide la carga de un mismo archivo más de una vez.

require_once "Controllers/plantilla.controlador.php";
require_once "Controllers/formularios.controlador.php";
require_once "Models/formularios.modelo.php";


$plantilla = new ControladorPlantilla();
$plantilla->ctrTraerPlantilla(); 