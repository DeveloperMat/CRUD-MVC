<?php

class ControladorPlantilla {
    
    //Llamada a la plantilla
    public function ctrTraerPlantilla(){
        #include() Se ulilizar para invocar el archivo que contiene el código php
        include "Views/plantilla.php";
    }
}