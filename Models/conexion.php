<?php

class Conexion
{

    static public function conectar()
    {
        #PDO("Nombre del servidor;nombre de la base de datos","usuario","contraseña")
        $link = new PDO("mysql:host=localhost;dbname=usuarios-php","root","");
        $link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $link->exec("set names utf8");

        return $link;
    }
}
