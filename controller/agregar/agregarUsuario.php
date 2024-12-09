<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php

require_once("../../connection/conexion.php");
require_once("../../views/usuarios/nuevoUsuario.php");

$user = $_POST['user'];
$password = $_POST['password'];
$cargo = $_POST['cargo'];



$sentencia = $bd->prepare("INSERT INTO `usuarios` (`user`, `password`, `cargo`, `estatus`) VALUES (?, ?, ?,'Activo')");

$sentencia->execute([$user, $password, $cargo]);

if ($sentencia) {


?> <Script>
        Swal.fire({
            icon: "success",
            title: "Usuario agregado correctamente",
            text: "Presione OK para continuar",
            showConfirmButton: true,

        }).then((result) => {
            if (result.isConfirmed) {
                location.href = "/licoreria/views/usuarios/nuevoUsuario.php";
            }
        });
    </Script>
<?php


} else {


?> <script>
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Ocurrio un error al agregar el usuario",
            showConfirmButton: true,

        }).then((result) => {
            if (result.isConfirmed) {
                location.href = "/licoreria/views/usuarios/nuevoUsuario.php";
            }
        });
    </script>

<?php



}



?>

<?php

require_once("../../parte_inferior.php");
?>