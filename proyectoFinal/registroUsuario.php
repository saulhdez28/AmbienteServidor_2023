<?php

//1. Establecer la conexión con el motor de base de datos y seleccionar la base de datos que vamos a utilizar
$conexion = new mysqli('localhost', 'root', '', 'bd_clienteservidor_proyecto');

if ($conexion->connect_error != null) {
    echo "Ocurrió un error al establecer la conexión: {$conexion->connect_error}";
}

//2. Ejecutar la consulta. (Ingresar datos)
$conexion->query(
    "Insert into cliente(id_cliente, nombre, apellidoPaterno, apellidoMaterno, fecha_Nacimiento, edad, direccion, correo) 
                    values (
                        '{$_POST['cedula']}', 
                        '{$_POST['nombreCliente']}', 
                        '{$_POST['apePaCliente']}', 
                        '{$_POST['apeMaCliente']}', 
                        '{$_POST['fechaNacimiento']}', 
                        '{$_POST['edadCliente']}', 
                        '{$_POST['direccion']}',
                        '{$_POST['correo']}'
                        )"
);

$conexion->query(
    "Insert into usuario(username, contrasena, id_cliente, id_rol) 
                    values (
                        '{$_POST['usuarioCliente']}', 
                        '{$_POST['pwd']}', 
                        '{$_POST['cedula']}', 
                        1
                        )"
);

header("location:index.html");

if ($conexion->error != '') {
    echo "Ocurrió un error al ejecutar la consulta: {$conexion->error}";
} else {
    sleep(2);
    header("location:login.php");
}
//3. Cerrar la conexión
$conexion->close();

?>