<?php

    $host = 'localhost';
    $usuario = 'root';
    $contraseña = '';
    $basedatos = 'my_proyecto';

    $conexion = new mysqli($host,$usuario,$contraseña,$basedatos);

    if ($conexion->connect_errno) {
        echo "fallos en conexión";
        exit();
    }
    $conexion->set_charset("utf8");//generar caracteres en utf-8
?>