<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php

require_once("../../connection/conexion.php");
require_once("../../views/clientes/agregarClientes.php");
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

$sentencia = $bd->prepare("INSERT INTO `clientes` (`nombres`, `apellidos`, `cedula`, `telefono`, `direccion`) VALUES (?, ?, ?, ?, ?)");

$sentencia->execute([$nombres, $apellidos, $cedula, $telefono, $direccion]);

if ($sentencia) {


?> <Script>
        Swal.fire({
            icon: "success",
            title: "Cliente registrado correctamente",
            text: "Presione OK para continuar",
            showConfirmButton: true,

        }).then((result) => {
            if (result.isConfirmed) {
                location.href = "/licoreria/views/clientes/agregarClientes.php";
            }
        });
    </Script>
<?php


} else {


?> <script>
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Ocurrio un error al registrar el cliente",
            showConfirmButton: true,

        }).then((result) => {
            if (result.isConfirmed) {
                location.href = "/licoreria/views/clientes/nuevoUsuario.php";
            }
        });
    </script>

<?php



}



?>

<?php

require_once("../../parte_inferior.php");
?>