<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>

    <!-- Custom fonts for this template-->
    <link href="/licoreria/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/licoreria/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/licoreria/css/style.css">




</head>

<body>

</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>




<?php
//require_once("../../parte_superior.php");
require_once("../../connection/conexion.php");




$username = $_POST['username'];
$password = $_POST['password'];



$sentencia = $bd->prepare("SELECT user as u ,password as p, id ,cargo as c FROM usuarios WHERE user=? AND password=?");
$sentencia->execute([$username, $password]);
$resultado = $sentencia->fetch(PDO::FETCH_OBJ);

if ($resultado == true) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $resultado->id;
    $_SESSION['cargo'] = $resultado->c;
?>


    <script>
        Swal.fire({
            icon: "success",
            title: "Bienvenido",
            text: "Presione OK para continuar",
            showConfirmButton: true,

        }).then((result) => {
            if (result.isConfirmed) {
                location.href = "/licoreria/inicio.php";
            }
        });
    </script>
    <?php




    /*     if (password_verify($password, $resultado->p)) {
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $resultado->id;
        $_SESSION['cargo'] = $resultado->c;
?>
        <script>
            Swal.fire({
                icon: "success",
                title: "Bienvenido",
                text: "Presione OK para continuar",
                showConfirmButton: true,

            }).then((result) => {
                if (result.isConfirmed) {
                    location.href = "/licoreria/inicio.php";
                }
            });
        </script>


    <?php


    } else {
    ?>
        <script>
            Swal.fire({
                icon: "error",
                title: "Contraseña Incorrecta",
                text: "Porfavor coloque una contraseña correcta",
                showConfirmButton: true,

            }).then((result) => {
                if (result.isConfirmed) {
                    location.href = "/licoreria/index.php";
                }
            });
        </script>


    <?php
    } */

    ?>







<?php

} else {
?>
    <script>
        Swal.fire({
            icon: "error",
            title: "usuario no encontrado",
            text: "Coloque los datos correctamente",
            showConfirmButton: true,

        }).then((result) => {
            if (result.isConfirmed) {
                location.href = "/licoreria/index.php";
            }


        });
    </script>


<?php
}


//require_once("../../parte_superior.php");

?>