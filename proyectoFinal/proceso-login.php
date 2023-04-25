<?php
//1. Establecer la conexion a base de datos.
$conexion = new mysqli('localhost', 'root', '', 'bd_clienteservidor_proyecto');

if ($conexion->connect_error != null) {
    echo "Ocurrio un error al establecer la conexion: {$conexion->connect_error}";
}
//2. Ejecutar la consulta obtener datos.

if (isset($_POST['login'])) {

    if (empty ($_POST['username']) and ($_POST['password'])) {
        echo '<div class="alert alert-danger">Verifique que los campos no esten vacios</div>';
    } else {
        $username = $_POST['username'];
		$password = $_POST['password'];
        $result = $conexion->query("SELECT * FROM usuario where username='$username' and contrasena='$password'");
        if ($datos=$result->fetch_object()) {
            header("location:index.html");
        } else {
            echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
        }

    }

} else {
    echo '<div class="alert alert-danger">No te funciona el puto codigo Saul</div>';
}


?>