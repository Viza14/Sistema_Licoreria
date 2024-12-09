<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php

require_once("../../connection/conexion.php");
require_once("../../views/productos/agregarProductos.php");

$productos = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];



$sentencia = $bd->prepare("INSERT INTO `producto` ( `descripcion`, `cantidad`, `precio`) VALUES (?, ?, ?)");

$sentencia->execute([$productos, $cantidad, $precio]);

if ($sentencia) {


?> <Script>
        Swal.fire({
            icon: "success",
            title: "Producto agregado correctamente",
            text: "Presione OK para continuar",
            showConfirmButton: true,

        }).then((result) => {
            if (result.isConfirmed) {
                location.href = "/licoreria/views/productos/agregarProductos.php";
            }
        });
    </Script>
<?php


} else {


?> <script>
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Ocurrio un error al agregar el producto",
            showConfirmButton: true,

        }).then((result) => {
            if (result.isConfirmed) {
                location.href = "/licoreria/views/productos/agregarProductos.php";
            }
        });
    </script>

<?php



}



?>

<?php

require_once("../../parte_inferior.php");
?>