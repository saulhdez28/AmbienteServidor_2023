<?php

//1. Establecer la conexion a base de datos.
$conexion = new mysqli('localhost', 'root', '', 'bd_clienteservidor_proyecto');

if ($conexion->connect_error != null) {
    echo "Ocurrio un error al establecer la conexion: {$conexion->connect_error}";
}

//2. Ejecutar la consulta obtener datos.

$resultado = $conexion->query("select * from cliente");


if ($conexion->error != '') {
    echo "Ocurrio un error al ejecutar la consulta: {$conexion->error}";
}

//3. Mostrar los resultados de la consulta.

ImprimeDatos($resultado);

//4. Cerrar la conexión
$conexion->close();     


function ImprimeDatos($datos)
{
    echo "<div>";
    echo "<h3>Datos de los clientes</h3> <br>";

    echo "<table width=50%>";
    echo "<tr>";
    echo "<th colspan='5'>Nombre</th>";
    echo "<th>Apellido Paterno</th>";
    echo "<th>Apellido Materno</th>";
    echo "<th>Fecha de Nacimiento</th>";
    echo "<th>Edad</th>";
    echo "<th>Direccion</th>";
    echo "<th>Correo</th>";
    echo "</tr>";

    if ($datos->num_rows > 0) {
        echo "<tr>";
        while ($row = $datos->fetch_assoc()) {
            echo "<td colspan='5'>{$row['nombre']}</td>";
            echo "<td>{$row['apellidoPaterno']}</td>";
            echo "<td>{$row['apellidoMaterno']}</td>";
            echo "<td>{$row['fecha_Nacimiento']}</td>";
            echo "<td>{$row['edad']}</td>";
            echo "<td>{$row['direccion']}</td>";
            echo "<td>{$row['correo']}</td>";

            echo "<td> <a href=actualizaDatos.php?id={$row['id_cliente']}>Modificar</a></td>";
            echo "<td> <a href=mostrarPersona.php?id={$row['id_cliente']}>Eliminar</a></td>";
            
            echo "</tr>";
        }
    }else{
        echo "<tr>";
        echo "<th>No hay registros de clientes.</th>";
        echo "</tr>";
        //hay cero filas
    }

    echo "</table>";


    echo "</div>";
}


?>