<?php
require_once("../../connection/conexion.php");

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];

    // Actualizar el producto
    $sentencia = $bd->prepare("UPDATE producto SET descripcion = ?, cantidad = ?, precio = ? WHERE id = ?");
    $resultado = $sentencia->execute([$descripcion, $cantidad, $precio, $id]);

    if ($resultado) {
        header("Location: /licoreria/views/productos/listado.php?mensaje=productoEditado");
    } else {
        header("Location: /licoreria/views/productos/listado.php?mensaje=error");
    }
} else {
    header("Location: /licoreria/views/producto/listado.php?mensaje=error");
}
?>
