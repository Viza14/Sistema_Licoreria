<?php
require_once("../../connection/conexion.php");

if (isset($_GET['id'])) {
    $id_cliente = $_GET['id'];

    // Preparar la consulta para eliminar el cliente
    $sentencia = $bd->prepare("DELETE FROM clientes WHERE id = ?");
    $resultado = $sentencia->execute([$id_cliente]);

    if ($resultado) {
        // Redirigir al listado con un mensaje de éxito
        header("Location: /licoreria/views/clientes/listado.php?success=Cliente eliminado correctamente");
    } else {
        echo "Error al eliminar el cliente.";
    }
} else {
    echo "ID no especificado.";
}
?>
