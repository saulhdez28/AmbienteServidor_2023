<?php

//1. Establecer la conexión a base de datos.
$conexion = new mysqli('localhost', 'root', '', 'bd_clienteservidor_proyecto');

if ($conexion->connect_error != null) {
    echo "Ocurrió un error al establecer la conexión: {$conexion->connect_error}";
}

//2. Ejecutar la consulta para obtener datos.
$resultado = $conexion->query("SELECT * FROM cliente WHERE id_cliente='117760228'");

//3. Obtener los datos del cliente y mostrarlos en pantalla.
$datos = $resultado->fetch_assoc();

$clienteNombre = $datos['nombre'];
$clienteCedula = $datos['nombre'];
$clienteApeP = $datos['apellidoPaterno'];
$clienteApeM = $datos['apellidoMaterno'];
$fechaNacimiento = $datos['fecha_Nacimiento'];
$edad = $datos['edad'];
$direccion = $datos['direccion'];
$correo = $datos['correo'];

$resultado2 = $conexion->query("SELECT username FROM usuario WHERE id_cliente='117760228'");
$datos2 = $resultado2->fetch_assoc();

$usernameUsuario = $datos2['username'];

if ($conexion->error != '') {
    echo "Ocurrió un error al ejecutar la consulta: {$conexion->error}";
}

//4. Cerrar la conexión.
$conexion->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Final</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
            background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
            background-attachment: fixed;
            background-repeat: no-repeat;
        }

        a {
            font-size: 14px;
            font-weight: 700
        }

        .superNav {
            font-size: 13px;
        }

        .form-control {
            outline: none !important;
            box-shadow: none !important;
        }

        @media screen and (max-width:540px) {
            .centerOnMobile {
                text-align: center
            }
        }

        a:hover {
            color: chocolate;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #682773
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 11px
        }

        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg sticky-top navbar-dark p-2 shadow-sm"
            style="background-color: rgb(5, 5, 61);">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="img/uebosOriginal.png" alt="logo" height="100px" ; width="auto">
                    </i> <strong>Uebos.gift CR</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
                    <div class="input-group">
                        <span class="border-warning input-group-text bg-warning text-white"><i
                                class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control border-warning" style="color:#7a7a7a">
                        <button class="btn btn-warning text-white">Search</button>
                    </div>
                </div>
                <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                    <div class="ms-auto d-none d-lg-block">
                        <div class="input-group">
                            <span class="border-warning input-group-text bg-warning text-white"><i
                                    class="fa-solid fa-magnifying-glass"></i></span>
                            <input type="text" class="form-control border-warning" style="color:#7a7a7a">
                            <button class="btn btn-warning text-white">Search</button>
                        </div>
                    </div>
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item">
                            <a class="nav-link mx-2 text-uppercase" href="index.html">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-uppercase" href="Contactenos.html">Contactenos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-uppercase" href="ubicacion.html">Ubicaciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-uppercase" href="perfil.php">Perfil</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <a href="consulta-datos.php">Prueba base de datos</a>

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                        <?php echo '<span class="font-weight-bold">'.$usernameUsuario.'</span>'?>
                        <?php echo '<span class="text-black-50">'.$correo.'</span><span> </span>'?>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Registro de Usuario</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Nombre</label>
                            <?php echo '<input type="text" class="form-control"  value="'.$clienteNombre.'">' ?>
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Primer Apellido</label>
                            <?php echo '<input type="text" class="form-control"  value="'.$clienteApeP.'">' ?>
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Segundo Apellido</label>
                            <?php echo '<input type="text" class="form-control"  value="'.$clienteApeM.'">' ?>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Cedula</label>
                            <?php echo '<input type="text" class="form-control" value="'.$clienteCedula.'">' ?>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Fecha de Nacimiento</label>
                            <?php echo '<input type="date" class="form-control"  value="'.$fechaNacimiento.'">' ?>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Edad</label>
                            <?php echo '<input type="text" class="form-control"  value="'.$edad.'">' ?>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Direccion</label>
                            <?php echo '<input type="text" class="form-control" value="'.$direccion.'">' ?>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Correo</label>
                            <?php echo '<input type="text" class="form-control"  value="'.$correo.'">' ?>
                        </div>

                    </div>

                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="button">Guardar</button>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>
            <p>Tienda de sublimado en diferentes productos</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>

</html>