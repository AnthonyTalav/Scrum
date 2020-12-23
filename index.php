<?php

$alert = '';
session_start();

if (!empty($_SESSION['active'])) {
    header('location: principal/');
} else {
    if (!empty($_POST)) {
        if (empty($_POST['user']) || empty($_POST['pass'])) {
            $alert = 'Ingrese su usuario y clave';
        } else {
            require_once "conexion.php";

            $user = $_POST['user'];
            $pass = $_POST['pass'];

            $query = mysqli_query($conection, "SELECT * FROM usuarios WHERE usuario='$user' AND pass='$pass'");
            $result = mysqli_num_rows($query);

            if ($result > 0) {
                $data = mysqli_fetch_array($query);
                $_SESSION['active'] = true;
                $_SESSION['idUser'] = $data['idusuario'];
                $_SESSION['nombre'] = $data['nombre'];
                $_SESSION['apepat'] = $data['apepat'];

                header('location: principal/');
            } else {
                $alert = 'El usuario o contraseña incorrecta';
                session_destroy();
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shorcut icon" type="image/x-icon" href="img/sh.ico">
    <link rel="StyleSheet" href="css/Estilos_login.css" type="text/css">

    <title>Stephen Hawking</title>

    <!-- fuente-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- sweet alert-->

    <link rel="stylesheet" href="plugins/dist/sweetalert2.all.min.css">

</head>

<body>
    <div class="conteiner">

        <div class="cont-login">

            <div class="div-logo">

                <img src="img/logo.png" height="100" width="80" alt="">

            </div>


            <form class="form" action="" method="post" onsubmit="return validar()">

                <h2>Bienvenido</h2>

                <div class="div-input" for="">
                    <h3>Usuario:</h3>
                    <input class="input" name="user" id="user" type="text">
                </div>

                <div class="div-input" for="">
                    <h3>Contraseña:</h3>
                    <input class="input" name="pass" id="pass" type="password">
                </div>

                <input type="submit" value="Ingresar" class="btn" />

                <div class="link-text">

                    <a href="#">Recordar Contraseña</a>

                </div>
                <div class="alert"> <?php echo isset($alert) ? $alert : ''; ?></div>
            </form>

        </div>

    </div>
    <script src="js/validar_login.js"></script>
    <!-- alert sweet -->
    <script src="plugins/dist/sweetalert2.all.min.js"></script>

</body>

</html>