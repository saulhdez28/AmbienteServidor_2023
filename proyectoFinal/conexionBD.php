<?php

//1. Establecer la conexion a base de datos.
$conexion = new mysqli('localhost', 'root', '', 'bd_clienteservidor_proyecto');

if ($conexion->connect_error != null) {
    echo "Ocurrio un error al establecer la conexion: {$conexion->connect_error}";
}
//2. Ejecutar la consulta obtener datos.

?>