<?php
require_once("../../connection/conexion.php");

if (isset($_GET['id'])) {
    $id_producto = $_GET['id'];

    // Eliminar el producto de la base de datos
    $sentencia = $bd->prepare("DELETE FROM producto WHERE id = ?");
    $resultado = $sentencia->execute([$id_producto]);

    if ($resultado) {
        header("Location: /licoreria/views/producto/listado.php?mensaje=productoEliminado");
    } else {
        header("Location: /licoreria/views/producto/listado.php?mensaje=error");
    }
} else {
    header("Location: /licoreria/views/producto/listado.php?mensaje=error");
}
?>
