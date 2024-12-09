<?php
require_once("../../connection/conexion.php");

// Verificar que el ID del cliente se haya pasado como parámetro en la URL
if (isset($_GET['id'])) {
    $id_cliente = $_GET['id'];

    // Consultar los datos actuales del cliente
    $sentencia = $bd->prepare("SELECT * FROM clientes WHERE id = ?");
    $sentencia->execute([$id_cliente]);
    $cliente = $sentencia->fetch(PDO::FETCH_ASSOC);

    if (!$cliente) {
        echo "Cliente no encontrado.";
        exit;
    }
} else {
    echo "ID de cliente no especificado.";
    exit;
}

// Verificar si se han enviado los datos del formulario para actualizar el cliente
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    // Actualizar los datos en la base de datos
    $sentencia = $bd->prepare("UPDATE clientes SET nombres = ?, apellidos = ?, cedula = ?, telefono = ?, direccion = ? WHERE id = ?");
    $sentencia->execute([$nombres, $apellidos, $cedula, $telefono, $direccion, $id_cliente]);

    // Redirigir al listado de clientes con un mensaje de éxito
    if ($sentencia) {
        header("Location: /licoreria/views/clientes/listado.php?success=1");
        exit;
    } else {
        echo "Error al actualizar el cliente.";
    }
}

require_once("../../parte_inferior.php");
?>
